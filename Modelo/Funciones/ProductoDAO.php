<?php
 
class ProductoDAO {
 
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
	

    public function listProductoseguncategoria($datos){
      require_once 'modelo/Conexion/connectbd.php';
          // connecting to database
          $this->db = new DB_Connect();
          $link=$this->db->connect();
      //$json=$cuenta;
      $categoria=$datos['id_categoria'];
    
      $query = "SELECT  p.id,p.Nombre,p.descripcion,i.Nombre as imagen ,p.Precio, c.Nombre as categoria FROM Producto as p inner join Categoria as c on c.id=p.idCategoria inner join Imagen as  i on p.idImagen=i.id where p.idCategoria='".$categoria."'";
      $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));
    
      $json = array();
      //$json =mysqli_num_rows($result);
      if(mysqli_num_rows($result)>0){
          //$json['cliente'][]=nada;
        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          
          array_push($json, array($line["id"],$line["Nombre"],$line["imagen"],$line["Precio"],$line["categoria"],$line["descripcion"]));
        }
        
      }
      
      mysqli_close($link);
      return $json;
      
    }  
    public function listProductoseguncategoriaAll(){
      require_once 'modelo/Conexion/connectbd.php';
          // connecting to database
          $this->db = new DB_Connect();
          $link=$this->db->connect();
      //$json=$cuenta;
      $categoria=$datos['id_categoria'];
    
      $query = "SELECT  p.id,p.Nombre,i.Nombre as imagen ,p.Precio, c.Nombre as categoria FROM Producto as p inner join Categoria as c on c.id=p.idCategoria inner join Imagen as  i on p.idImagen=i.id ";
      $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));
    
      $json = array();
      //$json =mysqli_num_rows($result);
      if(mysqli_num_rows($result)>0){
          //$json['cliente'][]=nada;
        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          
          array_push($json, array($line["id"],$line["Nombre"],$line["imagen"],$line["Precio"],$line["categoria"]));
        }
        
      }
      
      mysqli_close($link);
      return $json;
      
    }
   

    
  public function MostrarImagen($datos){
    //
  	require_once 'modelo/Conexion/connectbd.php';
        // connecting to database
        $this->db = new DB_Connect();
        $link=$this->db->connect();
         
         $id=$datos["id"];
        
        $query = "SELECT  i.Nombre from Producto  as p inner join Imagen i  on i.id=p.idImagen where p.id='".$id."' " ;
        $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));
        $json = array();
        //$json =mysqli_num_rows($result);
        if(mysqli_num_rows($result)>0){
        		//$json['cliente'][]=nada;
        	while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $fullname=$line["Nombre"];
           //  $var=["nombrecompleto"=>$fullname];      
          
      
        }
			
       }
       		mysqli_close($link);     
		return  ( $fullname) ;
  }


    
  public function MostrarDescripcion($datos){
    //
  	require_once 'modelo/Conexion/connectbd.php';
        // connecting to database
        $this->db = new DB_Connect();
        $link=$this->db->connect();
         
         $id=$datos["id"];
        
        $query = "SELECT  p.Descripcion from Producto  as p  where p.id='".$id."' " ;
        $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));
        $json = array();
        //$json =mysqli_num_rows($result);
        if(mysqli_num_rows($result)>0){
        		//$json['cliente'][]=nada;
        	while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $fullname=$line["Descripcion"];
           //  $var=["nombrecompleto"=>$fullname];      
          
      
        }
			
       }
       		mysqli_close($link);     
		return  ( $fullname) ;
  }

  
    
  public function MostrarPrecio($datos){
    //
  	require_once 'modelo/Conexion/connectbd.php';
        // connecting to database
        $this->db = new DB_Connect();
        $link=$this->db->connect();
         
         $id=$datos["id"];
        
        $query = "SELECT  p.Precio from Producto  as p  where p.id='".$id."' " ;
        $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));
        $json = array();
        //$json =mysqli_num_rows($result);
        if(mysqli_num_rows($result)>0){
        		//$json['cliente'][]=nada;
        	while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $fullname=$line["Precio"];
           //  $var=["nombrecompleto"=>$fullname];      
          
      
        }
			
       }
       		mysqli_close($link);     
		return  ( $fullname) ;
  }

    
  public function MostrarNombre($datos){
    //
  	require_once 'modelo/Conexion/connectbd.php';
        // connecting to database
        $this->db = new DB_Connect();
        $link=$this->db->connect();
         
         $id=$datos["id"];
        
        $query = "SELECT  p.Nombre from Producto  as p  where p.id='".$id."' " ;
        $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));
        $json = array();
        //$json =mysqli_num_rows($result);
        if(mysqli_num_rows($result)>0){
        		//$json['cliente'][]=nada;
        	while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $fullname=$line["Nombre"];
           //  $var=["nombrecompleto"=>$fullname];      
          
      
        }
			
       }
       		mysqli_close($link);     
		return  ( $fullname) ;
  }

}
 
?>
