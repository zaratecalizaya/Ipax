<?php

    require_once 'Controlador/ProductoController.php';
    $producto = new ControladorProducto();
    $resultado=  $producto ->  ctrImagenUser($_POST['id']);
    
    echo $resultado;
?>