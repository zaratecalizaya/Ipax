<?php

  
require_once 'modelo/utilitario.php';
require_once 'modelo/Funciones/CategoriaDAO.php';

require_once 'modelo/Funciones/ProductoDAO.php';
class ControladorProducto{

  
    /* ==============================
     Registro de Categoria     
     ===============================*/
  
     public function ctrListarProducto($pagina,$cantidad){
      
            
        $tabla = "Producto";
        $Productod = new CategoriaDAO();
        $respuesta = $Productod -> listCategoria($pagina,$cantidad);
     
         return $respuesta;
   
       }
  
       public function ctrListarNombre(){
      
            
        $tabla = "Categoria";
        $Categoriad = new CategoriaDAO();
        $respuesta = $Categoriad -> listCategoriaNombre();
     
         return $respuesta;
   
       }

       public function ctrImagenUser($id){
         
       // $mutil = new Utils();
       // $mutil -> console_log('la imagen no esta pasando');
        $datos=array("id"=>$id);

        $tabla = "Producto";
        $Productod = new ProductoDAO();
        $respuesta = $Productod -> MostrarImagen($datos);     
        return $respuesta;
        
       }


       public function ctrDescripcionProduct($id){
         
        // $mutil = new Utils();
        // $mutil -> console_log('la imagen no esta pasando');
         $datos=array("id"=>$id);
 
         $tabla = "Producto";
         $Productod = new ProductoDAO();
         $respuesta = $Productod -> MostrarDescripcion($datos);     
         return $respuesta;
         
        }

        public function ctrPrecioProduct($id){
         
          // $mutil = new Utils();
          // $mutil -> console_log('la imagen no esta pasando');
           $datos=array("id"=>$id);
   
           $tabla = "Producto";
           $Productod = new ProductoDAO();
           $respuesta = $Productod -> MostrarPrecio($datos);     
           return $respuesta;
           
          }
  
          public function ctrNombreProduct($id){
         
            // $mutil = new Utils();
            // $mutil -> console_log('la imagen no esta pasando');
             $datos=array("id"=>$id);
     
             $tabla = "Producto";
             $Productod = new ProductoDAO();
             $respuesta = $Productod -> MostrarNombre($datos);     
             return $respuesta;
             
            }


    
}

?>