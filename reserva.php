<?php 
include 'dados/dadosDaEmpresa.php';
include 'dados/dadosDoAdministrador_Cliente_Quarto.php';
include 'dados/dadosDoQuarto.php';
include 'dados/dadosDoCliente.php';

$empresas = $empresaDAO->listarTodos();

?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reservar</title>
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
                      <li><a href="quartos.php">Quartos</a></li>
                      <li><a href="servicos.php">Serviços</a></li>
                      <li><a href="cadastrar.php">Cadastrar</a></li>
                      <li class="active"><a href="reserva.php">Reservar</a></li>
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
          <h1 class="heading mb-3">Reservas</h1>
          <ul class="custom-breadcrumbs mb-4">
            <li><a href="index.php">Início</a></li>
            <li>&bullet;</li>
            <li>Reservar</li>
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

  <section class="section contact-section" id="next">
    <div class="container">
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

          <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="num_reserva">Número da Reserva</label>
                <input type="num_reserva" id="num_reserva" name="num_reserva" class="form-control ">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="data_inicio">Data de Entrada</label>
                <input type="text" id="data_inicio" name="data_inicio" class="form-control" placeholder="XX/XX/XXXX">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="data_fim">Data de Saída</label>
                <input type="text" id="data_fim" name="data_fim" class="form-control" placeholder="XX/XX/XXXX">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label for="adulto" class="font-weight-bold text-black">Adulto(s)</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="qtd_adulto" id="qtd_adulto" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4+">4+</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label for="crianca" class="font-weight-bold text-black">Criança(s)</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="qtd_crianca" id="qtd_crianca" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4+">4+</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-8 form-group">
                <label for="crianca" class="font-weight-bold text-black">Tipo de Quarto</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="tipo" id="tipo" class="form-control">
                    <option value="" selected disabled>Escolha seu quarto</option>
                    <option value="Simples">Quarto Simples - R$90,00</option>
                    <option value="Família">Quarto Família - R$130,99</option>
                    <option value="Suíte">Suíte - R$120,00</option>
                    <option value="Presidencial">Quarto Presidencial - R$250,00</option>
                    <option value="Estrela">Quarto Estrela - R$300,00</option>
                    <option value="Suíte (Duas Camas)">Quarto Suíte (Duas Camas) - R$320,00</option>
                  </select>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold">Serviços</label>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 form-group">
                <input type="checkbox" name="servicoM" id="musica">
                <label class="text-black">Música ao Vivo</label>
              </div>
              <div class="col-md-4 form-group">
                <input type="checkbox" name="servicoA" id="academia">
                <label class="text-black">Academia</label>
              </div>
              <div class="col-md-4 form-group">
                <input type="checkbox" name="servicoSD" id="danca">
                <label class="text-black">Sala de Dança</label>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 form-group">
                <input type="checkbox" name="servicoSQ" id="ser_quarto">
                <label class="text-black">Serviço de Quarto</label>
              </div>
              <div class="col-md-4 form-group">
                <input type="checkbox" name="servicoSPA" id="spa">
                <label class="text-black">Spa</label>
              </div>
              <div class="col-md-4 form-group">
                <input type="checkbox" name="servicoSJ" id="jogos">
                <label class="text-black">Sala de Jogos</label>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="valor_diario">Valor Total:</label>
                <input type="text" disabled="" id="valor_diario" class="form-control" value="R$0,00">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Reservar Agora" name="reserva" id="reserva" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
              </div>
            </div>
          </form>

        </div>

        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              <?php foreach ($empresas as $empresa) { ?>
                <p><span class="d-block">Endereço:</span> <span class="text-black"><?=$empresa['rua']?>, <?=$empresa['num']?>. <?=$empresa['bairro']?>. <?=$empresa['cidade']?>, <?=$empresa['estado']?>. <?=$empresa['pais']?>. <?=$empresa['cep']?>.</span></p>
                <p><span class="d-block">Telefone:</span> <span class="text-black"><?=$empresa['tel_celular']?></span><br> <span class="text-black"><?=$empresa['tel_fixo']?></span></p>
                <p><span class="d-block">Email:</span> <span class="text-black"><?=$empresa['email']?></span></p>
              <?php } ?>
            </div>
          </div>
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

        <?php foreach ($empresas as $empresa) { ?>
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