<?php

    require_once 'Controlador/ProductoController.php';
    $producto = new ControladorProducto();
    $resultado=  $producto ->  ctrPrecioProduct($_POST['id']);
    
    echo $resultado;
?>