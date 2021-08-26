<?php
 
class UsuarioDAO {
 
    private $db;
    // constructor

    function __construct() {
        require_once 'modelo/Conexion/connectbd.php';
        // connecting to database

        $this->db = new DB_Connect();
        $this->db->connect();

    }
 
    // destructor
    function __destruct() {
 
    }
	
	   public function isuserexist($tabla, $username) {

        require_once 'modelo/Conexion/connectbd.php';
        // connecting to database
        $this->db = new DB_Connect();
        $link=$this->db->connect();
		
        if ($result = mysqli_query($link,"SELECT * from ".$tabla." WHERE Usuario = '".$username."'")) {

          /* determinar el número de filas del resultado */
          $num_rows  = mysqli_num_rows($result);

          if ($num_rows > 0) {
            return true;
          } else {
            // no existe
            return false;
          }

        }else {
          return false;
        }
        
    }
 
    /**
     * agregar nuevo usuario
     */
    public function adduser($tabla,$datos) { //regusu et no es

      require_once 'modelo/Conexion/connectbd.php';
        // connecting to database
        $this->db = new DB_Connect();
        $link=$this->db->connect();
		
      	$pu=$this->isuserexist($tabla, $datos["Usuario"]);
        if($pu==false){
          $clave = md5($datos["pass"]);
          //$clave = $datos["clave"];
          $result=mysqli_query($link,"INSERT INTO ".$tabla." (Nombre,Apellidos,FechaNatal,Telefono,Correo,Genero,Usuario,Clave) VALUES('".$datos["nombre"]."','".$datos["apellidos"]."','".$datos["fehaNac"]."','".$datos["telf"]."','".$datos["email"]."','".$datos["genero"]."','".$datos["usuario"]."','".$clave."')");
          return $result;
      	}else{
      		return "el usuario ya existe";
      	}

    }
 /**
     * agregar nuevo usuario
     */
    public function updateuser($tabla,$datos) { //regusu et no es

      require_once 'modelo/Conexion/connectbd.php';
        // connecting to database
        $this->db = new DB_Connect();
        $link=$this->db->connect();
		
      	$pu=$this->isuserexist($tabla, $datos["usuario"]);
        if($pu==true){
          if ($datos["clave"]==""){
            $result=mysqli_query($link,"UPDATE ".$tabla." SET Nombre = '".$datos["nombre"]."',Usuario='".$datos["usuario"]."' ,FActualizacion = now() where id = ".$datos["id"]);
            return $result;
          }else{
            $clave = md5($datos["clave"]);
            $result=mysqli_query($link,"UPDATE ".$tabla." SET Nombre = '".$datos["nombre"]."',Usuario='".$datos["usuario"]."' ,Clave ='".$clave."',FActualizacion = now() where id = ".$datos["id"]);
            return $result;
          }          
      	}else{
      		return false;
      	}

    }
 
  

public function listmodal($tabla,$datos){
  require_once 'modelo/Conexion/connectbd.php';
      // connecting to database
      $this->db = new DB_Connect();
      $link=$this->db->connect();
      $id=$datos["id"];
  
      $query = "SELECT r.Comentario,u.Nombres, u.Apellidos , gc.Imagen   from usuarios u inner join reconocimiento r on u.Id=r.IdColega inner join comportamiento c on c.Id=r.IdComportamiento inner join grupocomportamiento  gc on gc.id=c.IdGrupo WHERE  r.IdColega='".$id."' ";
      $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));

      $json = array();
      //$json =mysqli_num_rows($result);
      if(mysqli_num_rows($result)>0){
          //$json['cliente'][]=nada;
        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          $fullname= $line["Nombres"]."".$line["Apellidos"];
          array_push($json, array($line["Comentario"],$fullname,$line["Imagen"]));
        }
    
      }
  
  mysqli_close($link);
  return  json_encode( $json);
  
}


public function login($datos) { //regusu et no es
        
  $mensaje = "0|Error no identificado";
  require_once 'modelo/Conexion/connectbd.php';
  
      require_once 'modelo/utilitario.php';
              $mutil = new Utils();
  // connecting to database
  $this->db = new DB_Connect();
  $link=$this->db->connect();
      
  $query = "SELECT Id,Nombre,Usuario,Clave FROM usuariosweb WHERE Usuario = '".$datos["usuario"]."' ";
  $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));

  $json = array();
  if(mysqli_num_rows($result)>0){
    if ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $clave = md5($datos["clave"]);
     // $mutil -> console_log('datosclave: '.$datos["clave"]);
     // $mutil -> console_log('clave: '.$clave);
     // $mutil -> console_log('lineclave: '.$line["Clave"]);
      if ($line["Clave"]==$clave){
        $mensaje="1|".$id."|".$line["Nombre"];
      }else{
        $mensaje="0|Usuario o contraseña incorrecto.";  
      }        
      
    }else{
      $mensaje="0|Error de conexion.";
    }
  }else{
    $mensaje="0|Usuario o contraseña incorrecto.";
  }
  mysqli_close($link);
  return $mensaje;
}


public function listarUserSelect(){
  require_once 'modelo/Conexion/connectbd.php';
  // connecting to database
  $this->db = new DB_Connect();
  $link=$this->db->connect();
//$json=$cuenta;


$query = "SELECT  id,Nombre,Apellidos  FROM Usuarios ";
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));

$json = array();
//$json =mysqli_num_rows($result);
if(mysqli_num_rows($result)>0){
  //$json['cliente'][]=nada;
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  
 $fullname=$line["Nombre"]." ".$line["Apellidos"];


  array_push($json, array($line["id"],$fullname));
}

}

mysqli_close($link);
return $json;


}

  
  
}
 
 
 
 
?>
