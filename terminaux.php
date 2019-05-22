<?php
session_start();

$_SESSION['im'] =$_GET['im'];
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title> les terminaux </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
<!-- Slider Item -->
<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/banner_2_product.png" alt="Ordinateur fix apple"></div>
											<div class="product_content">
												
												<div class="product_name"><div><a href="confir_term.php?im=ordinateur mac">Ordinateur Mac</a></div></div>
												
											</div>
										</div>
									</div>
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/dell.jpg" alt="ordinateur dell fix"></div>
											<div class="product_content">
												
												<div class="product_name"><div><a href="confir_term.php?im=Ordinateur dell">Ordinateur Dell</a></div></div>
											</div>
											
											</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/serveur.jpg" alt="serveur "></div>
											<div class="product_content">
												
												<div class="product_name"><div><a href="confir_term.php?im=serveur">Serveur</a></div></div>
												
											</div>
											
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/blog_5.jpg" alt="Ordinaeur portable apple"></div>
											<div class="product_content">
												
												<div class="product_name"><div><a href="confir_term.php?im=ordinateur mac">Ordinateur fix apple</a></div></div>
												
											</div>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/samsung.jpg" alt=""></div>
											<div class="product_content">
											<div class="product_name"><div><a href="confir_term.php?im=">Samsung galaxy s10</a></div></div>
												
										</div>
									</div>
</div>
</div>
</div>
</div>
</div>

</body> 
</html>