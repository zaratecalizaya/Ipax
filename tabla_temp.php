<?php

session_start();




$mensaje="";

if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){



        case 'Agregar':
            $id=$_POST['idproducto'];
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
            $imagen=$_POST['imagen'];
            $precio=$_POST['precio'];
            $cantidad=$_POST['cantidad'];
            $categoria=$_POST['categoria'];
           


            if(!isset($_SESSION['CARRITO'])){
                $producto=array(
                 'ID'=>$id,
                 'NOMBRE'=>$nombre,
                 'DESCRIPCION'=>$descripcion,
                 'IMAGEN'=>$imagen,
                 'PRECIO'=>$precio,
                 'CANTIDAD'=>$cantidad,
                 'CATEGORIA'=>$categoria             
                );
                $_SESSION['CARRITO' ][0]=$producto;
            }else{
                $idProductos=array_column($_SESSION['CARRITO'],"ID");
                if(in_array($id,$idProductos)){

                  //  echo "<script>alert('El elemento ha sido añadido');</script>";
                }else{
                $NumeroProductos=count($_SESSION['CARRITO']);
                $producto=array(
                    'ID'=>$id,
                    'NOMBRE'=>$nombre,
                    'DESCRIPCION'=>$descripcion,
                    'IMAGEN'=>$imagen,
                    'PRECIO'=>$precio,
                    'CANTIDAD'=>$cantidad,
                    'CATEGORIA'=>$categoria        
                );
                   $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                }
            }
            $mensaje=print_r($_SESSION,true);
            break;
            case "Eliminar":
                 foreach($_SESSION['CARRITO'] as $indice=>$producto){
                    if($producto['ID']==$_POST['id']){
                      unset($_SESSION['CARRITO'][$indice]);
                     // echo "<script>alert('elemento borrado');</script>";


                    }
                  //  $_SESSION.session_destroy();

                 }

                break;
                case "vaciar":
                   // echo '<script type="text/JavaScript"> location.reload(); </script>';
                    $_SESSION.session_destroy();
                    echo "<meta http-equiv='refresh' content='0'>";
                    /*// foreach($_SESSION['CARRITO'] as $indice=>$producto){
                      session_destroy();
                       // unset($_SESSION['CARRITO'][$indice]);
                        //  echo "<script>alert('elemento borrado');</script>";
    
    
                        
                      //  $_SESSION.session_destroy();
    
                     }*/
    
                    
                   
                break;

            }
            
    }





?>