

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
	<link rel="icon" href="Paginas/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="Paginas/assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="Paginas/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="Paginas/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="Paginas/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="Paginas/assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="Paginas/assets/css/pace.min.css" rel="stylesheet" />
	<script src="Paginas/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="Paginas/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="Paginas/assets/css/app.css" rel="stylesheet">
	<link href="Paginas/assets/css/icons.css" rel="stylesheet">
	<title>eTrans - eCommerce HTML Template</title>
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
								<input type="text" class="form-control w-100" placeholder="Search for Products" style="width: 10%;">
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
										<li class="nav-item"><a href="javascript:;" class="nav-link cart-link"><i class='bx bx-user'></i>
										<form action="estimacion.php" method="post">


                                        <select class="form-control select2"  id="usuario" name="usuario" style="width: 100%;"> 
                                           <?php

                                           require_once 'Controlador/UsuarioController.php';

                                               $cusuario = new ControladorUsuario();
                                               $list=  $cusuario ->ListaruserSelect();

                                               while (count($list)>0){
                                               $User = array_shift($list);
                                               $Did = array_shift($User);
                                               $Dnombres = array_shift($User);
                                               echo '<option value="'.$Did.'">'.$Dnombres.'</option>';
                                              }
                                                ?>
                                           </select>


</form></a>
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
													<a class="dropdown-item" href="javascript:;">

													
													<?php if(!empty($_SESSION['CARRITO'])) {?>

                                                  <?php $total=0 ; $subtotal="";  ?>
                                                 <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
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
							<h3 class="breadcrumb-title pe-3">Carrito de Compras</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Shop</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Carrito de Compras</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="py-4">
					<div class="container">
						<div class="shop-cart">
							<div class="row">
								<div class="col-12 col-xl-8">
									

                                         <?php if(!empty($_SESSION['CARRITO'])) {?>

                                           <?php $total=0 ;
										   
										   $subtotal="";  
										   ?>
											<?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
									<div class="shop-cart-list mb-3 p-3">
										<div class="row align-items-center g-3">
											<div class="col-12 col-lg-6">


												<div class="d-lg-flex align-items-center gap-2">
													<div class="cart-img text-center text-lg-start">
														<img src=<?php echo $producto['IMAGEN']?> width="130" alt="">
													</div>
													<div class="cart-detail text-center text-lg-start">
														<h6 class="mb-2"><?php echo $producto['NOMBRE']?></h6>
														<p class="mb-0">Subtotal:  <?php echo number_format($producto['PRECIO']*$producto['CANTIDAD']);?><span></span>
														</p>
														<h5 class="mb-0">Bs <?php echo $producto['PRECIO'];?></h5>
													</div>
												</div>



											</div>
											<div class="col-12 col-lg-3">
												<div class="cart-action text-center">
													<input type="number" class="form-control rounded-0" value=<?php echo number_format($producto['CANTIDAD']);?> >
												</div>
											</div>
											<div class="col-12 col-lg-3">
												<div class="text-center">


													<div class="d-flex gap-2 justify-content-center justify-content-lg-end"> 
														
				                                      <form action="" method="post">
														  <input type="hidden" name="id" id="id" value=<?php echo number_format($producto['ID']);?>>

													  <button type='submit' class='btn btn-light btn-ecomm' href='javascript:;' name='btnAccion' value='Eliminar'  ><i class='bx bx-x-circle'></i> Eliminar</button>
													  </form>									
												
														<a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-heart me-0'></i></a>
													</div>
												</div>
											</div>
										</div>
                                        <div class="my-4 border-top"></div>
									
									</div>

                                         <?php $total=$total+($producto['CANTIDAD']*$producto['PRECIO']);?>
                                        <?php }?>

   
	
	
										<?php  }   else{?>
    
	                                         <div class="alert alert-sucess">
												 No hay productos en el carrito..

											 </div>
											<?php }?>
											<div class="d-lg-flex align-items-center gap-2">	<a href="Tablerotienda.php" class="btn btn-light btn-ecomm"><i class='bx bx-shopping-bag'></i> Continuar Comprando</a>
											
											<button   class="btn btn-light btn-ecomm ms-auto" href='javascript:;' name='btnAccion' value='vaciar' ><i class='bx bx-x-circle'></i> Vaciar Carrito</button>
											<a href="javascript:;" class="btn btn-white btn-ecomm"><i class='bx bx-refresh'></i> Actualizacion de la Compra</a>
										</div>
								</div>
								<div class="col-12 col-xl-4">
									<div class="checkout-form p-3 bg-dark-1">
										<div class="card rounded-0 border bg-transparent shadow-none">
											
										</div>


										<div class="card rounded-0 border bg-transparent mb-0 shadow-none">
											<div class="card-body">
                                            <p class="fs-5 text-white">Estimacion de Costos</p>
                                            
                                            
												<div class="my-3 border-top"></div>
												<h5 class="mb-0">Order Total: <span class="float-end">Bs <?php  echo number_format($total,2);?></span></h5>
												<div class="my-4"></div>

												<div class="d-grid">
													
												
												<form action="Estimar.php" method="post">
                                                
												<div class="form-control">
													  <label for="my-input">Correo de contacto:</label>
													  <input class="form-control" type="text" id="email" name="email" placeholder="por favor escribe tu correo" required>
													

												  </div>
												  <small id="emailHelp" class="form-text">
                                                     la estimacion sera verificada en este correo
												  </small>
											
	                                              											
												
												
												
												
												<button class="btn btn-light btn-ecomm" type="submit" name="btnAccion" value="proceder">enviar estimacion</button>
												</form>
												
												</div>
                                                </div>
											
										</div>
									</div>
								</div>
							</div>
							<!--end row-->
						</div>
					</div>
				</section>
				<!--end shop cart-->
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
								<h6 class="mb-3 text-uppercase">ETIQUETAS POPULARES</h6>
								<div class="tags-box"> <a href="javascript:;" class="tag-link">Cloths</a>
									<a href="javascript:;" class="tag-link">Electronis</a>
									<a href="javascript:;" class="tag-link">Furniture</a>
									<a href="javascript:;" class="tag-link">Sports</a>
									<a href="javascript:;" class="tag-link">Men Wear</a>
									<a href="javascript:;" class="tag-link">Women Wear</a>
									<a href="javascript:;" class="tag-link">Laptops</a>
									<a href="javascript:;" class="tag-link">Formal Shirts</a>
									<a href="javascript:;" class="tag-link">Topwear</a>
									<a href="javascript:;" class="tag-link">Headphones</a>
									<a href="javascript:;" class="tag-link">Bottom Wear</a>
									<a href="javascript:;" class="tag-link">Bags</a>
									<a href="javascript:;" class="tag-link">Sofa</a>
									<a href="javascript:;" class="tag-link">Shoes</a>
								</div>
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
		<div class="modal fade" id="QuickViewProduct">
			<div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
				<div class="modal-content bg-dark-4 rounded-0 border-0">
					<div class="modal-body">
						<button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
						<div class="row g-0">
							<div class="col-12 col-lg-6">
								<div class="image-zoom-section">
									<div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
										<div class="item">
											<img src="Paginas/assets/images/product-gallery/01.png" class="img-fluid" alt="">
										</div>
										<div class="item">
											<img src="Paginas/assets/images/product-gallery/02.png" class="img-fluid" alt="">
										</div>
										<div class="item">
											<img src="Paginas/assets/images/product-gallery/03.png" class="img-fluid" alt="">
										</div>
										<div class="item">
											<img src="Paginas/assets/images/product-gallery/04.png" class="img-fluid" alt="">
										</div>
									</div>
									<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
										<button class="owl-thumb-item">
											<img src="Paginas/assets/images/product-gallery/01.png" class="" alt="">
										</button>
										<button class="owl-thumb-item">
											<img src="Paginas/assets/images/product-gallery/02.png" class="" alt="">
										</button>
										<button class="owl-thumb-item">
											<img src="Paginas/assets/images/product-gallery/03.png" class="" alt="">
										</button>
										<button class="owl-thumb-item">
											<img src="Paginas/assets/images/product-gallery/04.png" class="" alt="">
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="product-info-section p-3">
									<h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
									<div class="product-rating d-flex align-items-center mt-2">
										<div class="rates cursor-pointer font-13">	<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-light-4"></i>
										</div>
										<div class="ms-1">
											<p class="mb-0">(24 Ratings)</p>
										</div>
									</div>
									<div class="d-flex align-items-center mt-3 gap-2">
										<h5 class="mb-0 text-decoration-line-through text-light-3">$98.00</h5>
										<h4 class="mb-0">$49.00</h4>
									</div>
									<div class="mt-3">
										<h6>Discription :</h6>
										<p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
									</div>
									<dl class="row mt-3">	<dt class="col-sm-3">Product id</dt>
										<dd class="col-sm-9">#BHU5879</dd>	<dt class="col-sm-3">Delivery</dt>
										<dd class="col-sm-9">Russia, USA, and Europe</dd>
									</dl>
									<div class="row row-cols-auto align-items-center mt-3">
										<div class="col">
											<label class="form-label">Quantity</label>
											<select class="form-select form-select-sm">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
										<div class="col">
											<label class="form-label">Size</label>
											<select class="form-select form-select-sm">
												<option>S</option>
												<option>M</option>
												<option>L</option>
												<option>XS</option>
												<option>XL</option>
											</select>
										</div>
										<div class="col">
											<label class="form-label">Colors</label>
											<div class="color-indigators d-flex align-items-center gap-2">
												<div class="color-indigator-item bg-primary"></div>
												<div class="color-indigator-item bg-danger"></div>
												<div class="color-indigator-item bg-success"></div>
												<div class="color-indigator-item bg-warning"></div>
											</div>
										</div>
									</div>
									<!--end row-->
									<div class="d-flex gap-2 mt-3">
										<a href="javascript:;" class="btn btn-white btn-ecomm">	<i class="bx bxs-cart-add"></i>Add to Cart</a>	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to Wishlist</a>
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
	
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="Paginas/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="Paginas/assets/js/jquery.min.js"></script>
	<script src="Paginas/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="Paginas/assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
	<script src="Paginas/assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
	<script src="Paginas/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="Paginas/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="Paginas/assets/js/app.js"></script>
</body>

</html>