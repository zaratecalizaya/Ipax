<?php
include 'tabla_temp.php' 
?>

<div class="container mt-5 p-5">


<html>

<head>
<link href="paginas/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="paginas/assets/css/app.css" rel="stylesheet">
	<link href="paginas/assets/css/icons.css" rel="stylesheet">

</head>

<body>
	<p> Detalle de Venta </p>
	
	<form id="form1" name="form1" method="post" action="frmPersona.php" class="mt-5 p-5">
		
	  <table width="400" border="0">

        <tr>
	      <td width="80">Correo Para:</td>
	      <td width="225">	  	  
	        <input name="txtEdad" type="text" value="" id="txtEdad" />
	      </td>
	    </tr>
	    <tr>
	      <td width="80">Correo De:</td>
	      <td width="225">	  	  
	        <input name="txtEdad" type="text" value="" id="txtEdad" />
	      </td>
	    </tr>
	    <tr>
	      <td width="80">Asunto</td>
	      <td width="225">
              <textarea name="asunto" id="asunto" cols="30" rows="10"></textarea>	  	  
	      </td>
	    </tr>
	    <tr>
	      <td width="80">Mensaje</td>
	      <td width="225">	  	  
          <ul class="list-group">
          <?php if(!empty($_SESSION['CARRITO'])) {?>

                   <?php $total=0 ; $subtotal="";  ?>
            <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
             <li class="list-group-item" value=""><?php echo $producto['NOMBRE']?>...<?php echo $producto['CANTIDAD']?></li>
   

             <?php $total=$total+($producto['CANTIDAD']*$producto['PRECIO']);?>
                                        <?php }?>

   
	
	
										<?php }?>
          </ul>


	        <input name="txtEdad" type="text" value="" id="txtEdad" />
	      </td>
	    </tr>
	    <tr>
	      <td colspan="2">
	      <input type="submit" name="botones"  value="Enviar Correo" />
	     </td>
	    </tr>
	  </table>
	</form>

	<?php
		function enviar()
		{
			
		}
	
	  if(!empty($_POST['email_list']) && !empty($_POST('nombre')) && !empty($_POST('asunto')) && !empty($_POST('mensaje')) && !empty($_POST('correo'))){
		
		$nombre=$_POST['nombre'];
		$asunto=$_POST['asunto'];
		$mensaje=$_POST['mensaje'];
		$correo=$_POST['correo'];
		$nombre=$_POST['nombre'];
		$nombre=$_POST['nombre'];

	  }
	?>
<!-- Bootstrap JS -->
<script src="paginas/assets/js/bootstrap.bundle.min.js"></script>
	
</body>
</html>
</div>