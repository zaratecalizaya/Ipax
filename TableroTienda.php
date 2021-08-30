
<?php 
include 'tabla_temp.php';
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="paginas/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="paginas/assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="paginas/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="paginas/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="paginas/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="paginas/assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="paginas/assets/css/pace.min.css" rel="stylesheet" />
	<script src="paginas/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="paginas/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="paginas/assets/css/app.css" rel="stylesheet">
	<link href="paginas/assets/css/icons.css" rel="stylesheet">
	<title>TableroTienda</title>
</head>

<body class="bg-theme bg-theme1">	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		<!--start top header wrapper-->
		<div class="header-wrapper bg-dark-1">
			<div class="top-menu border-bottom">
				<div class="container">
					<nav class="navbar navbar-expand">
						<div class="shiping-title text-uppercase font-13 text-white d-none d-sm-flex">Bienvenido a IpaxStore!</div>
						
					</nav>
				</div>
			</div>
			<div class="header-content pb-3 pb-md-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col col-md-auto">
							<div class="d-flex align-items-center">
								<div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i class='bx bx-menu'></i>
								</div>
								<div class="logo d-none d-lg-flex">
									<a href="index.html">
										<img src="paginas/assets/images/logo-icon.png" class="logo-icon" alt="" />
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md order-4 order-md-2">
							<div class="input-group flex-nowrap px-xl-4">
								<input type="text" class="form-control w-100" placeholder="Search for Products">
								 <span class="input-group-text cursor-pointer"><i class='bx bx-search'></i></span>
							</div>
						</div>
						<div class="col col-md-auto order-3 d-none d-xl-flex align-items-center">
							<div class="fs-1 text-white"><i class='bx bx-headphone'></i>
							</div>
							<div class="ms-2">
								<p class="mb-0 font-13">LLAMANOS AHORA</p>
								<h5 class="mb-0">+591 75828728</h5>
							</div>
						</div>
						<div class="col col-md-auto order-2 order-md-4">
							<div class="top-cart-icons">
								<nav class="navbar navbar-expand">
									<ul class="navbar-nav ms-auto">
										<li class="nav-item"><a href="javascript:;" class="nav-link cart-link"><i class='bx bx-user'></i>Nombre de Usuario Logueado</a>
										</li>
										
										<li class="nav-item dropdown dropdown-large">
											<a href="#" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link" data-bs-toggle="dropdown"> <span class="alert-count"><?php echo(empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?></span>
												<i class='bx bx-shopping-bag'></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:;">
													<div class="cart-header">
														<p class="cart-header-title mb-0"><?php echo(empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?></p>
														<p class="cart-header-clear ms-auto mb-0">VER CARRITO</p>
													</div>
												</a>
												<div class="cart-list">
													

													
													<?php if(!empty($_SESSION['CARRITO'])) {?>

                                                  <?php $total=0 ; $subtotal="";  ?>
                                                 <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title"><?php echo $producto['NOMBRE']?></h6>
																<p class="cart-product-price"><?php echo number_format($producto['CANTIDAD']);?> X $<?php echo $producto['PRECIO'];?></p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute">
																    <form action="" method="post">
														                <input type="hidden" name="id" id="id" value=<?php echo number_format($producto['ID']);?>>

													                    <button type='submit' class='btn btn-light btn-ecomm' href='javascript:;' name='btnAccion' value='Eliminar'  ><i class='bx bx-x'></i> </button>
													                    </form>		
															</div>
																<div class="cart-product">
																	<img src=<?php echo $producto['IMAGEN']?> class="" alt="product image">
																</div>
															</div>
														</div>
														</a>
													
                                                    
                                         <?php $total=$total+($producto['CANTIDAD']*$producto['PRECIO']);?>
                                        <?php }?>

   
	
	
										<?php  }   else{?>
    
	                                         <div class="alert alert-sucess">
												 No hay productos en el carrito..

											 </div>
											<?php }?>

												</div>
												<a href="javascript:;">
													<div class="text-center cart-footer d-flex align-items-center">
														<h5 class="mb-0">TOTAL </h5>
														<h5 class="mb-0 ms-auto">Bs <?php  echo number_format($total,2);?></h5>
													</div>
												</a>
												<div class="d-grid p-3 border-top"> <a href="Carrito.php" class="btn btn-light btn-ecomm">VERIFICAR</a>
												</div>
											</div>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
			<div class="primary-menu border-top">
				<div class="container">
					<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
						<div class="offcanvas-header">
							<button class="btn-close float-end"></button>
							<h5 class="py-2 text-white">Navigation</h5>
						</div>
						<ul class="navbar-nav">
						<li class="nav-item active"> <a class="nav-link" href="TableroTienda.php">Home </a> 
							</li>
							<li class="nav-item active"> <a class="nav-link " href="Categorias.php" >CATEGORIAS </a>
								
								<!-- dropdown-large.// -->
							</li>
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">TIENDA  <i class='bx bx-chevron-down'></i></a>
								<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="Carrito.php">CARRITO DE COMPRAS</a>
									</li>
									<li><a class="dropdown-item" href="Categorias.php">CATEGORIA DE LA TIENDA</a>
									</li>
									
									
								
								</ul>
							</li>
							
						<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">MI CUENTA  <i class='bx bx-chevron-down'></i></a>
								<ul class="dropdown-menu">
									
									<li><a class="dropdown-item" href="IniciarSesion.php">INICIAR SESION</a>
									</li>
									<li><a class="dropdown-item" href="Registro.php">REGISTRARSE
									</a>
									<li><a class="dropdown-item" href="DetalledeUsuario.php">DETALLES DE USUARIO</a>
									</li>
									</li>
									<li><a class="dropdown-item" href="ReestablecerContraseña.php">HAS OLVIDADO TU CONTRASEÑ<A></A></a>
									</li>
									
									<li><a class="dropdown-item" href="account-downloads.html">CERRAR SESION</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!--end top header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">ARTICULOS DE LA TIENDA</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Tienda</a>
										</li>
										
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop area-->
				<section class="py-4">
					<div class="container">
						<div class="row">
							<div class="col-12 col-xl-3">
								<div class="btn-mobile-filter d-xl-none"><i class='bx bx-slider-alt'></i>
								</div>
								<div class="filter-sidebar d-none d-xl-flex">
									<div class="card rounded-0 w-100">
										<div class="card-body">
											<div class="align-items-center d-flex d-xl-none">
												<h6 class="text-uppercase mb-0">Filter</h6>
												<div class="btn-mobile-filter-close btn-close ms-auto cursor-pointer"></div>
											</div>
											<hr class="d-flex d-xl-none" />
											<div class="product-categories">
												<h6 class="text-uppercase mb-3">CATEGORIAS</h6>
												<ul class="list-unstyled mb-0 categories-list">
												<?php 
                    require_once 'Controlador/CategoriaController.php';
  
                  
                    $categorias = new ControladorCategoria();
                    $list=  $categorias -> ctrListarNombre();
                            
					while (count($list)>0){
						$categoria = array_shift($list);
						$Did= array_shift($categoria);
						$Dnombre= array_shift($categoria);
						echo"<li><a href='javascript:;'>$Dnombre </a>
						</li>";
						
					
					}
                    
					?> 


													
												</ul>
											</div>
											
										
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-xl-9">
								<div class="product-wrapper">
									<div class="toolbox d-flex align-items-center mb-3 gap-2">
										<div class="d-flex flex-wrap flex-grow-1 gap-1">
											<div class="d-flex align-items-center flex-nowrap">
												<p class="mb-0 font-13 text-nowrap text-white">ORDENAR POR:</p>
												<select class="form-select ms-3 rounded-0">
													<option value="menu_order" selected="selected">ORDENAR POR POPULARIDAD</option>
													<option value="popularity">ORDENAR POR NOMBRE</option>
													<option value="rating">ORDENAR POR NOVEDAD</option>
												</select>
											</div>
										</div>
										<div class="d-flex flex-wrap">
											<div class="d-flex align-items-center flex-nowrap">
												<p class="mb-0 font-13 text-nowrap text-white">Mostrar:</p>
												<select class="form-select ms-3 rounded-0">
													<option>9</option>
													<option>12</option>
													<option>16</option>
												</select>
											</div>
										</div>
									</div>
									<div class="product-grid">
										<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
											

                                <?php    
							   
							   require_once 'Controlador/CategoriaController.php';
  
                  
							   $categorias = new ControladorCategoria();
                                $list=$categorias->	ctrListarseguncategoria();  
							   while( count($list)>0){
								$producto = array_shift($list);
                                $pid = array_shift($producto);  
                                $pnombre = array_shift($producto);
						
								$pimagen = array_shift($producto);
								$pprecio = array_shift($producto);
								$pcategoria = array_shift($producto);
								$pdescripcion= array_shift($producto);  
								$cantidad=1;
								echo "
								 <div class='col'>
								<div class='card rounded-0 product-card'>
								<div class='card-header bg-transparent border-bottom-0'>
									<div class='d-flex align-items-center justify-content-end gap-3'>
										<a href='javascript:;'>
										</a>
										<a href='javascript:;'>
											<div class='product-wishlist'> <i class='bx bx-heart'></i>
											</div>
										</a>
									</div>
								</div>
								<img src=".$pimagen." class='card-img-top' alt='...'width='200px' height='200px'>
								<div class='card-body'>
									<div class='product-info'>
										<a href='javascript:;'>
											<p class='product-catergory font-13 mb-1'>".$pcategoria."</p>
										</a>
										<a href='javascript:;'>
											<h6 class='product-name mb-2'>".$pnombre."</h6>
										</a>
										<div class='d-flex align-items-center'>
											<div class='mb-1 product-price'>	
												<span class='text-white fs-5'>Bs ".$pprecio."</span>
											</div>
										
										</div>
										<div class='product-action mt-2'>
											<div class='d-grid gap-2'>

											<form action='' method='post'>
											<input type='hidden' name='idproducto' id='idproducto' value='".$pid."'>
											<input type='hidden' name='nombre' id='nombre' value='".$pnombre."'>
											<input type='hidden' name='descripcion' id='descripcion' value='".$pdescripcion."'>
											<input type='hidden' name='imagen' id='imagen' value='".$pimagen."'>
											
											<input type='hidden' name='precio' id='precio' value='".$pprecio."'>
											<input type='hidden' name='cantidad' id='cantidad' value='".$cantidad."'>
											<input type='hidden' name='categoria' id='categoria' value='".$pcategoria."'>
											
											<button type='submit' class='btn btn-light btn-ecomm' href='javascript:;' name='btnAccion' value='Agregar'  ><i class='bx bxs-cart-add'></i>AÑADIR AL CARRITO</button>
											</form>
											
											 <button type='button' href='javascript:;'onclick='CargaDatos(".$pid.")' class='btn btn-light btn-ecomm' data-bs-toggle='modal' data-bs-target='#modalP'><i class='bx bx-zoom-in'></i>VISTA RAPIDA</button>	
											</div>
										</div>
									</div>
								</div>
							   </div>

							   </div>";


							   }

                                 
							   if(count($list)==0){
								   echo "aun falta rellenar datos...!";
								 

							   }
							 
							 ?>
													
										</div>
										<!--end row-->
									</div>
									<hr>
									<nav class="d-flex justify-content-between" aria-label="Page navigation">
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="javascript:;"><i class='bx bx-chevron-left'></i> Prev</a>
											</li>
										</ul>
										<ul class="pagination">
											<li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">2</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">3</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">4</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">5</a>
											</li>
										</ul>
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="javascript:;" aria-label="Next">Next <i class='bx bx-chevron-right'></i></a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
				<!--end shop area-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
		<footer>
			<section class="py-4 bg-dark-1">
				<div class="container">
					<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
						<div class="col">
							<div class="footer-section1 mb-3">
								<h6 class="mb-3 text-uppercase">Datos de contacto</h6>
								<div class="address mb-3">
									<p class="mb-0 text-uppercase text-white">DIRECCION</p>
									<p class="mb-0 font-12">123 Street Name, City, Australia</p>
								</div>
								<div class="phone mb-3">
									<p class="mb-0 text-uppercase text-white">TELEFONO</p>
									<p class="mb-0 font-13">Toll Free (123) 472-796</p>
									<p class="mb-0 font-13">Mobile : +91-9910XXXX</p>
								</div>
								<div class="email mb-3">
									<p class="mb-0 text-uppercase text-white">Email</p>
									<p class="mb-0 font-13">mail@example.com</p>
								</div>
								<div class="working-days mb-3">
									<p class="mb-0 text-uppercase text-white">HORARIO DE ATENCION</p>
									<p class="mb-0 font-13">Mon - FRI / 9:30 AM - 6:30 PM</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="footer-section2 mb-3">
								<h6 class="mb-3 text-uppercase">CATEGORIAS DE LA TIENDA</h6>
								<ul class="list-unstyled">
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Jeans</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> T-Shirts</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sports</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Shirts & Tops</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Clogs & Mules</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sunglasses</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Bags & Wallets</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sneakers & Athletic</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Electronis</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Furniture</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<div class="footer-section3 mb-3">
															</div>
						</div>
						<div class="col">
							<div class="footer-section4 mb-3">
								<h6 class="mb-3 text-uppercase">MANTENTE INFORMADO</h6>
								<div class="subscribe">
									<input type="text" class="form-control radius-30" placeholder="Introduce tu correo electronico" />
									<div class="mt-2 d-grid">	<a href="Registro.php" class="btn btn-white btn-ecomm radius-30">Registrate</a>
									</div>
									<p class="mt-2 mb-0 font-13">Registrate para recibir actualizaciones e informacion sobre nuevos productos</p>
								</div>
															</div>
						</div>
					</div>
					<!--end row-->
					<hr/>
					<div class="row row-cols-1 row-cols-md-2 align-items-center">
						<div class="col">
							<p class="mb-0">Copyright IPAXSTUDIO © 2021. All right reserved.</p>
						</div>
							</div>
					<!--end row-->
				</div>
			</section>
		</footer>
		<!--end footer section-->
		<!--start quick view product-->
		<!-- Modal -->
		<div class="modal fade" id="modalP">
			<div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
				<div class="modal-content bg-dark-4 rounded-0 border-0">
					<div class="modal-body">
						<button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
						<div class="row g-0">
							<div class="col-12 col-lg-6">
								<div class="image-zoom-section">
									
										
										
											<img id="myImage" name="myImage" src=""  alt="aqui viene una imag" width='530' height='450'>
										
									
									
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="product-info-section p-3">
									<h3 class="mt-3 mt-lg-0 mb-0" id="hNombre"></h3>
									<div class="product-rating d-flex align-items-center mt-2">
										
									</div>
									<div class="d-flex align-items-center mt-3 gap-2">
										
										<h4 class="mb-0" id="hPrecio"></h4>
									</div>
									<div class="mt-3">
										<h6>Discription :</h6>
										<p class="mb-0" id="hDescripcion"></p>
									</div>
									
									<div class="row row-cols-auto align-items-center mt-3">
										<div class="col">
											<label class="form-label">cantidad</label>
											
											<input type="number" class="form-select form-select-sm">
										</div>
									</div>
									<!--end row-->
									<div class="d-flex gap-2 mt-3">
										<a href="javascript:;" class="btn btn-white btn-ecomm">	<i class="bx bxs-cart-add"></i>Añadir A Carrito</a>	
									</div>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
		<!--end quick view product-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>
	<!--end wrapper-->
	<!--start switcher-->



	<script>



	</script>
	<script>





  function obtenerImagen(idp){
      var parametros = {
                "id" : idp,
              
        };
		//document.getElementById("myImage").src="ImagenP/modelorealidadaumentada2.png";
        $.ajax({
        type: "POST",
        url: "tarjetaimagen.php",
        data: parametros,
        success:function(respuesta ) {
          //window.location.href = window.location.href;
          console.log(respuesta);
		  //document.getElementsByTagName(myImage).src=respuesta;
             document.getElementById("myImage").src=respuesta;  
			 //$("#myImage").attr("src",respuesta);

        }
       });  
	   }
       
	   function obtenerPrecio(idp){
      var parametros = {
                "id" : idp
              
        };
		//document.getElementById("myImage").src="ImagenP/modelorealidadaumentada2.png";
        $.ajax({
        type: "POST",
        url: "tarjetaprecio.php",
        data: parametros,
        success:function(respuesta ) {
          //window.location.href = window.location.href;
          console.log(respuesta);
		  //document.getElementsByTagName(myImage).src=respuesta;
		  document.getElementById("hPrecio").innerHTML ="Bs"+respuesta;  
			 //$("#myImage").attr("src",respuesta);
           
        },
		
       });  
	   }
         
	   function obtenerNombre(idp){
      var parametros = {
                "id" : idp,
              
        };
		//document.getElementById("myImage").src="ImagenP/modelorealidadaumentada2.png";
        $.ajax({
        type: "POST",
        url: "tarjetanombre.php",
        data: parametros,
        success:function(respuesta ) {
          //window.location.href = window.location.href;
          console.log(respuesta);
		  //document.getElementsByTagName(myImage).src=respuesta;
		  document.getElementById("hNombre").innerHTML =respuesta;  
			 //$("#myImage").attr("src",respuesta);

        }
       });  
	   }

	   function obtenerDescripcion(idp){
      var parametros = {
                "id" : idp,
              
        };
		//document.getElementById("myImage").src="ImagenP/modelorealidadaumentada2.png";
        $.ajax({
        type: "POST",
        url: "tarjetadescripcion.php",
        data: parametros,
        success:function(respuesta ) {
          //window.location.href = window.location.href;
          console.log(respuesta);
		  //document.getElementsByTagName(myImage).src=respuesta;
		  document.getElementById("hDescripcion").innerHTML =respuesta;   
			 //$("#myImage").attr("src",respuesta);

        }
       });  
	   }
  

  function CargaDatos(idp){
	  obtenerDescripcion(idp);
	  obtenerImagen(idp);
	  obtenerPrecio(idp);
	  obtenerNombre(idp);
  }

	</script>
	
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="paginas/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="paginas/assets/js/jquery.min.js"></script>
	<script src="paginas/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="paginas/assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
	<script src="paginas/assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
	<script src="paginas/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="paginas/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="paginas/assets/plugins/nouislider/nouislider.min.js"></script>
	<script src="paginas/assets/js/product-gallery.js"></script>
	<!--app JS-->
	<script src="paginas/assets/js/app.js"></script>
</body>

</html>