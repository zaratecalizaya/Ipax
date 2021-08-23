<!doctype html>
<html lang="en">

<head>
	<?php include('./views/layouts/links.php') ?>
	<title>eTrans - eCommerce HTML Template</title>
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
										<li class="nav-item"><a href="javascript:;" class="nav-link cart-link"><i class='bx bx-user'></i></a>
										</li>
										<li class="nav-item"><a href="javascript:;" class="nav-link cart-link"><i class='bx bx-heart'></i></a>
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
												<li><a href="#">Casual T-Shirts</a>
												</li>
												<li><a href="#">Formal Shirts</a>
												</li>
												<li><a href="#">Jackets</a>
												</li>
												<li><a href="#">Jeans</a>
												</li>
												<li><a href="#">Dresses</a>
												</li>
												<li><a href="#">Sneakers</a>
												</li>
												<li><a href="#">Belts</a>
												</li>
												<li><a href="#">Sports Shoes</a>
												</li>
											</ul>
										</div>
										<!-- end col-3 -->
										<div class="col-md-4">
											<h6 class="large-menu-title">Electronics</h6>
											<ul class="">
												<li><a href="#">Mobiles</a>
												</li>
												<li><a href="#">Laptops</a>
												</li>
												<li><a href="#">Macbook</a>
												</li>
												<li><a href="#">Televisions</a>
												</li>
												<li><a href="#">Lighting</a>
												</li>
												<li><a href="#">Smart Watch</a>
												</li>
												<li><a href="#">Galaxy Phones</a>
												</li>
												<li><a href="#">PC Monitors</a>
												</li>
											</ul>
										</div>
										<!-- end col-3 -->
										<div class="col-md-4">
											<div class="pramotion-banner1">
												<img src="paginas/assets/images/gallery/menu-img.jpg" class="img-fluid" alt="">
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
							<h3 class="breadcrumb-title pe-3">Sign in</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Sign In</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="">
					<div class="container">
						<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
							<div class="row row-cols-1 row-cols-xl-2">
								<div class="col mx-auto">
									<div class="card">
										<div class="card-body">
											<div class="border p-4 rounded">
												<div class="text-center">
													<h3 class="">Sign in</h3>
													<p>Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
													</p>
												</div>
												<div class="d-grid">
													<a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
															<img class="me-2" src="paginas/assets/images/icons/search.svg" width="16" alt="Image Description">
															<span>Sign in with Google</span>
														</span>
													</a> <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
												</div>
												<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
													<hr />
												</div>
												<div class="form-body">
													<form class="row g-3">
														<div class="col-12">
															<label for="inputEmailAddress" class="form-label">Usuario</label>
															<input type="email" class="form-control" id="usuario" placeholder="Email Address">
														</div>
														<div class="col-12">
															<label for="inputChoosePassword" class="form-label">Contraseña</label>
															<div class="input-group" id="show_hide_password">
																<input type="password" class="form-control border-end-0" id="clave" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
																<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
															</div>
														</div>
														<div class="col-md-6 text-end"> <a href="authentication-forgot-password.html">Forgot Password ?</a>
														</div>
														<div class="col-12">
															<div class="d-grid">
																<button type="submit" class="btn btn-light"><i class="bx bxs-lock-open"></i>Sign in</button>
															</div>
														</div>
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
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>
	<!--end wrapper-->
	<!--start switcher-->

	<!--end switcher-->

	<?php include('./views/layouts/scripts.php') ?>
	<!--Password show & hide js -->
	<script src="paginas/assets/js/show-hide-password.js"></script>
</body>

</html>