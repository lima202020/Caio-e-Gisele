<?php 
include 'dados/dadosDaEmpresa.php';
$empresas = $empresaDAO->listarTodos();

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quartos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	<link rel="stylesheet" href="css/fancybox.min.css">

	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<header class="site-header js-site-header">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="#">Ruby - Empire</a></div>
				<div class="col-6 col-lg-8">


					<div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<!-- END menu-toggle -->

					<div class="site-navbar js-site-navbar">
						<nav role="navigation">
							<div class="container">
								<div class="row full-height align-items-center">
									<div class="col-md-6 mx-auto">
										<ul class="list-unstyled menu">
											<li><a href="../index.php">Início</a></li>
											<li class="active"><a href="quartos.php">Quartos</a></li>
											<li><a href="servicos.php">Serviços</a></li>
											<li><a href="cadastrar.php">Cadastrar</a></li>
											<li><a href="reserva.php">Reservar</a></li>
											<li><a href="sobre.php">Sobre</a></li>
										</ul>
									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- END head -->

	<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row site-hero-inner justify-content-center align-items-center">
				<div class="col-md-10 text-center" data-aos="fade">
					<h1 class="heading mb-3">Quartos</h1>
					<ul class="custom-breadcrumbs mb-4">
						<li><a href="../index.php">Início</a></li>
						<li>&bullet;</li>
						<li>Quartos</li>
					</ul>
				</div>
			</div>
		</div>

		<a class="mouse smoothscroll" href="#next">
			<div class="mouse-icon">
				<span class="mouse-wheel"></span>
			</div>
		</a>
	</section>
	<!-- END section -->



	<section class="section">
		<div class="container">

			<div class="row">
				<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
					<a href="#" class="room">
						<figure class="img-wrap">
							<img src="images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
						</figure>
						<div class="p-3 text-center room-info">
							<h2>Quarto Simples</h2>
							<span class="text-uppercase letter-spacing-1">R$90,00 / por noite</span>
						</div>
					</a>
				</div>

				<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
					<a href="#" class="room">
						<figure class="img-wrap">
							<img src="images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
						</figure>
						<div class="p-3 text-center room-info">
							<h2>Quarto Família</h2>
							<span class="text-uppercase letter-spacing-1">R$120,00 / por noite</span>
						</div>
					</a>
				</div>

				<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
					<a href="#" class="room">
						<figure class="img-wrap">
							<img src="images/img_3.jpg" alt="Free website template" class="img-fluid mb-3">
						</figure>
						<div class="p-3 text-center room-info">
							<h2>Suíte</h2>
							<span class="text-uppercase letter-spacing-1">R$180,00 / por noite</span>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
					<a href="#" class="room">
						<figure class="img-wrap">
							<img src="images/img_4.jpg" alt="Free website template" class="img-fluid mb-3">
						</figure>
						<div class="p-3 text-center room-info">
							<h2>Quarto Presidencial</h2>
							<span class="text-uppercase letter-spacing-1">R$250,00 / por noite</span>
						</div>
					</a>
				</div>


				<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
					<a href="#" class="room">
						<figure class="img-wrap">
							<img src="images/img_5.jpg" alt="Free website template" class="img-fluid mb-3">
						</figure>
						<div class="p-3 text-center room-info">
							<h2>Quarto Estrela</h2>
							<span class="text-uppercase letter-spacing-1">R$300,00 / por noite</span>
						</div>
					</a>
				</div>

				<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
					<a href="#" class="room">
						<figure class="img-wrap">
							<img src="images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
						</figure>
						<div class="p-3 text-center room-info">
							<h2>Quarto Suíte (Duas Camas)</h2>
							<span class="text-uppercase letter-spacing-1">R$320,00 / por noite</span>
						</div>
					</a>
				</div>

			</div>
		</div>
	</section>

	<section class="section bg-light">

		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-md-7">
					<h2 class="heading" data-aos="fade">Grandes Ofertas</h2>
					<p data-aos="fade">Veja as ofertas para o Dia dos Namorados.</p>
				</div>
			</div>

			<div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
				<a href="reserva.php" class="image d-block bg-image-2" style="background-image: url('images/img_2.jpg');"></a>
				<div class="text">
					<span class="d-block mb-4"><span class="display-4 text-primary">R$130,99</span> <span class="text-uppercase letter-spacing-1">/ por duas noites</span> </span>
					<h2 class="mb-4">Quarto Família</h2>
					<p>Aproveite o dia com você e seu parceiro(a) para aproveitar este belo momento juntos, . 
					</p>
					<p><a href="reserva.php" class="btn btn-primary text-white">Escolher Este</a></p>
				</div>
			</div>
			<div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
				<a href="#" class="image d-block bg-image-2 order-2" style="background-image: url('images/img_2.jpg');"></a>
				<div class="text order-1">
					<span class="d-block mb-4"><span class="display-4 text-primary">R$120,00</span> <span class="text-uppercase letter-spacing-2">/ por noite</span> </span>
					<h2 class="mb-4">Suíte</h2>
					<p>Um ótimo para descansar e apaixonar-se, construa mais uma história</p>
					<p><a href="reserva.php" class="btn btn-primary text-white">Escolher Este</a></p>
				</div>
			</div>

		</div>
	</section>

	<section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
		<div class="container" >
			<div class="row align-items-center">
				<div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
					<h2 class="text-white font-weight-bold">Cadastre-se Para Realizar Sua Reserva!</h2>
				</div>
				<div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
					<a href="cadastrar.php" class="btn btn-outline-white-primary py-3 text-white px-5">Cadastrar-se</a>
				</div>
			</div>
		</div>
	</section>

	<footer class="section footer-section">
		<div class="container">
			<div class="row mb-4">
				<div class="col-md-3 mb-5">
					<ul class="list-unstyled link">
						<li><a href="#">Sobre Nós</a></li>
						<li><a href="#">Termos &amp; Condições</a></li>
						<li><a href="#">Política de Privacidade</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 mb-5">
					<ul class="list-unstyled link">
						<li><a href="#">Contate-nos</a></li>
						<li><a href="#">Restaurante</a></li>
					</ul>
				</div>

				<?php foreach ($empresas as $empresa) {	?>
					<div class="col-md-3 mb-5 pr-md-5 contact-info">
						<!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
						<p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Endereço:</span> <span><?=$empresa['rua']?>, <?=$empresa['num']?>. <br><?=$empresa['bairro']?>. <?=$empresa['cidade']?>, <?=$empresa['estado']?>. <?=$empresa['pais']?>. <?=$empresa['cep']?>.</span></p>
						<p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Telefone:</span> <span><?=$empresa['tel_celular']?><br> <?=$empresa['tel_fixo']?></span></p>
						<p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span><?=$empresa['email']?></span></p>
					<?php } ?>

				</div>
				<div class="row pt-5">
					<p class="col-md-6 text-left">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Corporação Ruby &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados. <i class="icon-heart-o" aria-hidden="true"></i>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>

					<p class="col-md-6 text-right social">
						<a href="#"><span class="fa fa-instagram"></span></a>
						<a href="#"><span class="fa fa-facebook"></span></a>
						<a href="#"><span class="fa fa-twitter"></span></a>
					</p>
				</div>
			</div>
		</footer>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>


		<script src="js/aos.js"></script>

		<script src="js/bootstrap-datepicker.js"></script> 
		<script src="js/jquery.timepicker.min.js"></script> 



		<script src="js/main.js"></script>
	</body>
	</html>