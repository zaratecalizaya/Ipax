<?php

    require_once 'Controlador/ProductoController.php';
    $producto = new ControladorProducto();
    $resultado=  $producto ->  ctrDescripcionProduct($_POST['id']);
    
    echo $resultado;
?>