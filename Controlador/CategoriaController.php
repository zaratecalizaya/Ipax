<?php

  require_once 'modelo/Funciones/CategoriaDAO.php';
  require_once 'modelo/Funciones/ProductoDAO.php';
  require_once 'modelo/utilitario.php';


class ControladorCategoria{
  
    /* ==============================
     Registro de Categoria     
     ===============================*/
  
     public function ctrListarCategoria($pagina,$cantidad){
      
            
        $tabla = "Categoria";
        $Categoriad = new CategoriaDAO();
        $respuesta = $Categoriad -> listCategoria($pagina,$cantidad);
     
         return $respuesta;
   
       }
  
       public function ctrListarNombre(){
      
            
        $tabla = "Categoria";
        $Categoriad = new CategoriaDAO();
        $respuesta = $Categoriad -> listCategoriaNombre();
     
         return $respuesta;
   
       }
  

        public function ctrListarseguncategoria(){
          
                    $mutil = new Utils();
                    $mutil -> console_log('no esta agarrando dtos');
          

          if(isset($_POST['captura'])){
            $mutil -> console_log('esta ingresando datos');
          $datos = array("id_categoria"=>$_POST["id_categoria"] );

               $tabla = "Producto";
               $Categoriad = new ProductoDAO();
               $respuesta = $Categoriad -> listProductoseguncategoria($datos);
   
               return $respuesta;
          }

          $tabla = "Producto";
          $Categoriad = new ProductoDAO();
          $respuesta = $Categoriad -> listProductoseguncategoriaAll();
          return $respuesta;
        }
  



    
    
}

?>