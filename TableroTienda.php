<!doctype html>
<html lang="en">

<head>
	<?php include('./views/layouts/links.php') ?>
	<title>TableroTienda</title>
</head>

<body class="bg-theme bg-theme1"> <b class="screen-overlay"></b>
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
											<a href="#" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link" data-bs-toggle="dropdown"> <span class="alert-count">8</span>
												<i class='bx bx-shopping-bag'></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:;">
													<div class="cart-header">
														<p class="cart-header-title mb-0">cONTEO DE ITEMS ÑADIDOS A CARRITO</p>
														<p class="cart-header-clear ms-auto mb-0">VER CARRITO</p>
													</div>
												</a>
												<div class="cart-list">
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Men White T-Shirt</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="paginas/assets/images/products/01.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>

												</div>
												<a href="javascript:;">
													<div class="text-center cart-footer d-flex align-items-center">
														<h5 class="mb-0">TOTAL DE ARTICULOS EN CARRITO</h5>
														<h5 class="mb-0 ms-auto">$189.00</h5>
													</div>
												</a>
												<div class="d-grid p-3 border-top"> <a href="javascript:;" class="btn btn-light btn-ecomm">CHECKOUT</a>
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
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">CATEGORIAS <i class='bx bx-chevron-down'></i></a>
								<div class="dropdown-menu dropdown-large-menu">
									<div class="row">
										<div class="col-md-4">
											<h6 class="large-menu-title">Fashion</h6>
											<ul class="">



												<?php
												require_once 'Controlador/CategoriaController.php';


												$categorias = new ControladorCategoria();
												$list =  $categorias->ctrListarNombre();

												while (count($list) > 0) {
													$categoria = array_shift($list);
													$Did = array_shift($categoria);
													$Dnombre = array_shift($categoria);
													echo "<li><a href='javascript:;'>$Dnombre </a>
						                    </li>";
												}

												?>

											</ul>
										</div>
										<!-- end col-3 -->

										<!-- end col-3 -->
										<div class="col-md-4">
											<div class="pramotion-banner1">
												<img src="ImagenC/ipax.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<!-- end col-3 -->
									</div>
									<!-- end row -->
								</div>
								<!-- dropdown-large.// -->
							</li>
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">TIENDA <i class='bx bx-chevron-down'></i></a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="Carrito.php">CARRITO DE COMPRAS</a>
									</li>
									<li><a class="dropdown-item" href="Categorias.php">CATEGORIA DE LA TIENDA</a>
									</li>



								</ul>
							</li>

							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">MI CUENTA <i class='bx bx-chevron-down'></i></a>
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
													$list =  $categorias->ctrListarNombre();

													while (count($list) > 0) {
														$categoria = array_shift($list);
														$Did = array_shift($categoria);
														$Dnombre = array_shift($categoria);
														echo "<li><a href='javascript:;'>$Dnombre </a>
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
											$list = $categorias->ctrListarseguncategoria();
											while (count($list) > 0) {
												$producto = array_shift($list);
												$pid = array_shift($producto);
												$pnombre = array_shift($producto);
												$pimagen = array_shift($producto);
												$pprecio = array_shift($producto);
												$pcategoria = array_shift($producto);
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
								<img src=" . $pimagen . " class='card-img-top' alt='...'width='200px' height='200px'>
								<div class='card-body'>
									<div class='product-info'>
										<a href='javascript:;'>
											<p class='product-catergory font-13 mb-1'>" . $pcategoria . "</p>
										</a>
										<a href='javascript:;'>
											<h6 class='product-name mb-2'>" . $pnombre . "</h6>
										</a>
										<div class='d-flex align-items-center'>
											<div class='mb-1 product-price'>	
												<span class='text-white fs-5'>" . $pprecio . "</span>
											</div>
										
										</div>
										<div class='product-action mt-2'>
											<div class='d-grid gap-2'>
												<a href='javascript:;' class='btn btn-light btn-ecomm'>	<i class='bx bxs-cart-add'></i>AÑADIR AL CARRITO</a> <button type='button' href='javascript:;'onclick='obtenerImagen(" . $pid . ")' class='btn btn-light btn-ecomm' data-bs-toggle='modal' data-bs-target='#modalP'><i class='bx bx-zoom-in'></i>VISTA RAPIDA</button>	
											</div>
										</div>
									</div>
								</div>
							   </div>

							   </div>";
											}


											if (count($list) == 0) {
												echo "aun falta rellenar datos...!";
											}

											?>

										</div>
										<!--end row-->
									</div>
									<hr>
									<nav class="d-flex justify-content-between" aria-label="Page navigation">
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="javascript:;"><i class='bx bx-chevron-left'></i> Anterior</a>
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
									<div class="mt-2 d-grid"> <a href="Registro.php" class="btn btn-white btn-ecomm radius-30">Registrate</a>
									</div>
									<p class="mt-2 mb-0 font-13">Registrate para recibir actualizaciones e informacion sobre nuevos productos</p>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<hr />
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
									<div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">

										<div class="item">
											<img id="myImage" name="myImage" src="" alt="aqui viene una imag">
										</div>
									</div>

								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="product-info-section p-3">
									<h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
									<div class="product-rating d-flex align-items-center mt-2">

									</div>
									<div class="d-flex align-items-center mt-3 gap-2">
										<h5 class="mb-0 text-decoration-line-through text-light-3">$98.00</h5>
										<h4 class="mb-0">$49.00</h4>
									</div>
									<div class="mt-3">
										<h6>Discription :</h6>
										<p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
									</div>
									<dl class="row mt-3">
										<dt class="col-sm-3">Product id</dt>
										<dd class="col-sm-9">#BHU5879</dd>
										<dt class="col-sm-3">Delivery</dt>
										<dd class="col-sm-9">Russia, USA, and Europe</dd>
									</dl>
									<div class="row row-cols-auto align-items-center mt-3">
										<div class="col">
											<label class="form-label">cantidad</label>
											<select class="form-select form-select-sm">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
									<!--end row-->
									<div class="d-flex gap-2 mt-3">
										<a href="javascript:;" class="btn btn-white btn-ecomm"> <i class="bx bxs-cart-add"></i>Añadir A Carrito</a>
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
		function obtenerImagen(idp) {
			var parametros = {
				"id": idp
			};
			//document.getElementById("myImage").src="ImagenP/modelorealidadaumentada2.png";
			$.ajax({
				type: "POST",
				url: "tarjetaimagen.php",
				data: parametros,
				success: function(respuesta) {
					//window.location.href = window.location.href;
					console.log(respuesta);
					//document.getElementsByTagName(myImage).src=respuesta;
					document.getElementById("myImage").src = respuesta;
					//$("#myImage").attr("src",respuesta);

				}
			});
		}
	</script>
	<!-- scripts -->
	<?php include('./views/layouts/scripts.php') ?>
</body>

</html>