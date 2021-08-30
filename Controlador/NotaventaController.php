<?php

  
require_once 'modelo/utilitario.php';
require_once 'modelo/Funciones/CategoriaDAO.php';

require_once 'modelo/Funciones/ProductoDAO.php';
require_once 'modelo/Funciones/NotaVentaDAO.php';
class ControladorNotaVenta{

  
    /* ==============================
     Registro de Categoria     
     ===============================*/
  
     public function ctrRegistroNotaVenta(){
      
       $mutil = new Utils();
        
      
       
         if(isset($_POST["id"])){
        
            if(($_POST["id"])==0){
             
              $monto=$_POST["monto"];
              $cliente=$_POST["cliente"];
              $mutil -> console_log($monto);
              $mutil -> console_log($cliente);
 

              $datos = array("id"=>$_POST["idventa"],
                             "monto"=>$_POST["monto"],
                             "cliente"=>$_POST["cliente"]);
              
                             $tabla = "Nota_Venta";
                             $Productod = new NotaVentaDAO();
                             $respuesta = $Productod -> addNotaVenta($tabla,$datos);  
              //return $respuesta;
        
        
              if ($respuesta==true){
                return "true";
              }else{
                return $respuesta;  
              }
              
            }
                          
          }else{
            return "false";
          }
      
       
       
       
       
       
        }



       
       


    
}

?>