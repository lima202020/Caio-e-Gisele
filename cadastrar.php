<?php 
include 'dados/dadosDaEmpresa.php';
include 'dados/dadosDoCliente.php';
$empresas = $empresaDAO->listarTodos();

?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastrar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/fancybox.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">

  <script type="text/javascript">
    $(document).ready(function(){
      $("#cadastrarA").click(function(){
        $("#myAlert").toggle();
      });
    });


  </script>

  <style type="text/css">
    #ini{
      color: red;
    }

    #ini:hover{
      transition: 0.5s;
      color: #B22222;
    }
  </style>

</head>
<body>

  <header class="site-header js-site-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.php">Ruby - Empire</a></div>
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
                      <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
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
       <div class="col-md-10 text-center">
         <h1 class="heading mb-3">Cadastrar</h1>
         <ul class="custom-breadcrumbs mb-4">
           <li><a href="../index.php" id="ini">Início</a></li>
           <li>&bullet;</li>
           <li>Cadastrar</li>
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
     <div class="col-md-7">

       <form class="bg-white p-md-5 p-4 mb-5 border" method="post">
        <br>
        <!-- Text input-->
        <div class="row">
          <div class="col-md-6 form-group">
           <label class="text-black font-weight-bold" for="email">Nome Completo</label>      
           <input id="nome" name="nome" required="" class="form-control" type="text">  
         </div>

         <!-- Text input-->
         <div class="col-md-6 form-group">  
           <label class="text-black font-weight-bold" for="data_nasc">Data de Nascimento</label>
           <input id="data_nasc" name="data_nasc" placeholder="DD/MM/AAAA" required="" type="text" maxlength="10" class="form-control" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}">


         </div>
       </div>



       <!-- Prepended text-->
       <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="text-black font-weight-bold" for="tel_celular">Celular</label>
            <input id="tel_celular" name="tel_celular" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$">
          </div>
        </div>

        <div class="col-md-6">
         <div class="form-group">
           <label class="text-black font-weight-bold" for="tel_fixo">Fixo (Opcional)</label>    <input id="tel_fixo" name="tel_fixo" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13">
         </div>
       </div>
     </div> 

     <!-- Prepended text-->
     <div class="row">
       <div class="col-md-12 form-group">
        <label class="text-black font-weight-bold" for="email">Email</label>
        <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="email">
      </div>
    </div>

    <!-- Search input-->
    <div class="row">
     <div class="col-md-7 form-group">
       <label class="text-black font-weight-bold" for="cep">CEP</label>
       <input id="cep" name="cep" class="form-control" required="" placeholder="00000-000" type="text" maxlength="8" pattern="[0-9]{5}[\-]?[0-9]{3}">
     </div>
   </div>


   <div class="row">
     <div class="form-group col-md-4">
      <label class="text-black font-weight-bold">Rua</label>
      <input id="rua" name="rua" required="" class="form-control" type="text" >
    </div>

    <div class="form-group col-md-4">
      <label class="text-black font-weight-bold">N°</label>
      <input id="n_casa" name="n_casa" required="" class="form-control" type="text">
    </div>

    <div class="form-group col-md-4">
      <label class="text-black font-weight-bold">Bairro</label>
      <input id="bairro" name="bairro" required="" class="form-control" type="text">
    </div>
  </div>

  <div class="row">
   <div class="col-md-4">
    <label class="text-black font-weight-bold">Cidade</label>
    <input id="cidade" name="cidade" class="form-control" required="" type="text" >
  </div>

  <div class="form-group col-md-4">
    <label class="text-black font-weight-bold">Estado</label>
    <div class="field-icon-wrap">
     <div class="icon"><span class="ion-ios-arrow-down"></span></div>
     <select name="estado" id="estado" class="form-control">
      <option selected="" disabled="">Escolha o seu estado:</option>
      <option value="AC">Acre</option>
      <option value="AL">Alagoas</option>
      <option value="AP">Amapá</option>
      <option value="AM">Amazonas</option>
      <option value="BA">Bahia</option>
      <option value="CE">Ceará</option>
      <option value="DF">Distrito Federal</option>
      <option value="ES">Espírito Santo</option>
      <option value="GO">Goiás</option>
      <option value="MA">Maranhão</option>
      <option value="MT">Mato Grosso</option>
      <option value="MS">Mato Grosso do Sul</option>
      <option value="MG">Minas Gerais</option>
      <option value="PA">Pará</option>
      <option value="PB">Paraíba</option>
      <option value="PR">Paraná</option>
      <option value="PE">Pernambuco</option>
      <option value="PI">Piauí</option>
      <option value="RJ">Rio de Janeiro</option>
      <option value="RN">Rio Grande do Norte</option>
      <option value="RS">Rio Grande do Sul</option>
      <option value="RO">Rondônia</option>
      <option value="RR">Roraima</option>
      <option value="SC">Santa Catarina</option>
      <option value="SP">São Paulo</option>
      <option value="SE">Sergipe</option>
      <option value="TO">Tocantins</option>
    </select>
  </div>
</div>

<div class="form-group col-md-4">
  <label class="text-black font-weight-bold">País</label>
  <input id="pais" name="pais" type="text" class="form-control">
</div>
</div>


<div class="row">
 <div class="col-md-6">
  <div class="form-group">
    <input type="submit" name="cadastrar" id="cadastrarA" class="btn btn-danger" value="Cadastrar" >
  </div>
</div>
</div>
<div class="row">
 <div class="col-md-6">
  <div class="form-group">
    <button type="reset" name="limpar" id="limpar" class="btn btn-index">Limpar campos</button>
  </div>
</div>
</div>
<?php
  echo $frase;
?>

</form>


</div>

<div class="col-md-5">
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
        <h2 class="text-white font-weight-bold">Ja é Cadastrado? Faça a sua reserva!</h2>
      </div>
      <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
        <a href="reserva.php" class="btn btn-outline-danger py-3 text-white px-5">Reserve-se</a>
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

<?php foreach ($empresas as $empresa) {   ?>
  <div class="col-md-3 mb-5 pr-md-5 contact-info">
   <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
   <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-danger"></span>Endereço:</span> <span><?=$empresa['rua']?>, <?=$empresa['num']?>. <br><?=$empresa['bairro']?>. <?=$empresa['cidade']?>, <?=$empresa['estado']?>. <?=$empresa['pais']?>. <?=$empresa['cep']?>.</span></p>
   <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-danger"></span>Telefone:</span> <span><?=$empresa['tel_celular']?><br> <?=$empresa['tel_fixo']?></span></p>
   <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-danger"></span>Email:</span> <span><?=$empresa['email']?></span></p>
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
</div>
</footer>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script type="js/"></script>

<script src="js/aos.js"></script>

<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.timepicker.min.js"></script> 



<script src="js/main.js"></script>


<div class="modal fade rounded-sm shadow" id="myModal" tabindex="-1"  role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Mensagem:</h4>
      </div>
      
      <div class="modal-body">
        <center>Cadastro Feito com Sucesso.</center>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">OK</button>
      </div>
    
    </div>
  </div>
</div>

</body>
</html>