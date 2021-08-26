<?php

  require_once 'modelo/Funciones/UsuarioDAO.php';
  require_once 'modelo/utilitario.php';

class ControladorUsuario{
  
    /* ==============================
     Registro de Usuario 
     ===============================*/
  
    public function ctrRegistroUsuario(){
      
        if(isset($_POST["id"])){
          if(($_POST["pass"])==($_POST["pass2"])){
          if(($_POST["id"])==0){
            if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/',$_POST["nombre"])){
              if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/',$_POST["apellidos"])){
            $datos = array("nombre"=>$_POST["nombre"],
                           "apellidos"=>$_POST["apellidos"],
                           "fechaNac"=>$_POST["fechaNac"],
                           "email"=>$_POST["email"],
                           "genero"=>$_POST["genero"],
                           "telf"=>$_POST["telf"],
                           "usuario"=>$_POST["usuario"],
                           "pass"=>$_POST["pass"]);
            
            $tabla = "Usuarios";
            $Usuariod = new UsuarioDAO();
            $respuesta = $Usuariod -> adduser($tabla,$datos);
            
            //return $respuesta;
            if ($respuesta==true){
              return "true";
            }else{
              return $respuesta;  
            }
            
            
          }
        }else{
            
              return "false2";
            }
          
          }
          }else{
              return "Las contraseñas no coinciden";
          }
        }else{
          return "false";
        }
        
    }

    public function ctrloginUser(){
      
      require_once 'modelo/utilitario.php';
              $mutil = new Utils();
              $mutil -> console_log('entro login');
    if(isset($_POST["usuario"])){
      $mutil -> console_log('entro post login');
      $datos = array("usuario"=>$_POST["usuario"],
                     "clave"=>$_POST["clave"]);
      
      $tabla = "usuariosweb";
      $Usuariod = new UsuarioDAO();
      $respuesta = $Usuariod -> login($datos);
      
      //return $respuesta;
      if (is_null( $respuesta)){
        $mutil -> console_log('null respuesta');
        return "0|Error de conexión al servidor";
      }else{
        $mutil -> console_log('respuesta no null');
        return $respuesta;  
      }
      
    
  }else{
    return "-1|";
  }                 
    
}


public function ListaruserSelect(){
  $tabla = "Usuarios";
  $Usuariod = new UsuarioDAO();
  $respuesta = $Usuariod -> listarUserSelect();
 
  return $respuesta;

}


}

?>