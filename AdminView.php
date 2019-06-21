<?php 
include 'Entrar.php';
if (isset($_GET['sair'])) {
  if ($_GET['sair'] == true) {
    unset($_SESSION['nomeLogin']);
    session_destroy();
  }

}
if(!empty($_SESSION['nomeLogin'])){
  ?>
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Início</title>

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="images/icons/material-icons.css">
    
    <!--JS-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){

        Materialize.updateTextFields();
        $('.button-collapse').sideNav();
        $('.navegacao').sideNav();
        $('select').material_select();
        $('.carousel').carousel();
        
        $('.pushpin-red-nav').each(function() {
          var $this = $(this);
          var $target = $('#' + $(this).attr('data-target'));
          $this.pushpin({
            top: $target.offset().top,
            bottom: $target.offset().top + $target.outerHeight() - $this.height()
          });
        });


        $('.pushpin-blue-nav').each(function() {
          var $this = $(this);
          var $target = $('#' + $(this).attr('data-target'));
          $this.pushpin({
            top: $target.offset().top,
            bottom: $target.offset().top + $target.outerHeight() - $this.height()
          });
        });


        $('.pushpin-green-nav').each(function() {
          var $this = $(this);
          var $target = $('#' + $(this).attr('data-target'));
          $this.pushpin({
            top: $target.offset().top,
            bottom: $target.offset().top + $target.outerHeight() - $this.height()
          });
        });

        $('.target').pushpin({
          top: 0,
          bottom: 1000,
          offset: 0
        });
      });

    </script>
    
    <style type="text/css">
      html, body, .block {
        height: 100%;
      }
      .pin-top {
        position: relative;
      }
      .pin-bottom {
        position: relative;
      }

      /*Class for when element is pinned*/
      .pinned {
        position: fixed !important;
      }

      #sair{
        font-family: "Roboto";
        font-size: 13pt;
        margin-left: 10%;
        color: black; 
        box-shadow: 0 0 0 0;
        border: 0;
      }

    </style>


  </head>
  <body>

    <!--ÁREA DO MENU-->
    <ul id="conta" class="side-nav">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="images/quarto.jpg">
          </div>
          <a href="#!user"><i class="material-icons medium" style="color: white;">account_circle</i></a>
          <a href="#!name"><span class="white-text name"><?php echo $_SESSION['nomeLogin']; ?></span></a>
          <a href="#!funcao"><span class="white-text email">Administrador da Empresa</span></a>
        </div>
      </li>
      <li><a href="AdminView.php" style="color: black;"><i class="material-icons">home</i>Início</a></li>
      <li><a href="tabelaCliente.php" style="color: black;"><i class="material-icons">people</i>Clientes</a></li>
      <li><a href="quarto.php" style="color: black;"><i class="material-icons">hotel</i>Quartos</a></li>
      <li><a href="reservaFeita.php" style="color: black;"><i class="material-icons">done</i>Reservas Feitas</a></li>
      <li class="divider"></li>
      <li><a href="contaAdmin.php" style="color: black;"><i class="material-icons">person</i>Minha Conta</a></li>
      <li><a href="empresa.php" style="color: black;"><i class="material-icons">domain</i>Empresa</a></li>
      <li class="divider"></li>
      <li>
        <form>
          <input type="submit" name="sair" id="sair" value="Sair" class="white">
        </form>
      </li>
    </ul>

    <nav class="white">
      <div class="nav-wrapp container">
        <a href="#" class="brand-logo center" style="color: black;">Ruby</a>
        <a href="#" data-activates="conta" style="color: black;"  class="navegacao"><i class="material-icons">menu</i></a>
      </div>
    </nav>

    <!--Tela de Boas Vindas-->
    <div class="row container" style="margin-top: 3%;">
      <div class="col s6 m12"><h4 align="center">Seja Bem Vindo, <?php echo $_SESSION['nomeLogin']; ?></h4></div>
    </div>



    <div class="container">
      <div class="row" style="margin-top: 4%;">
        <div  class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Administre a Sua Empresa Aqui!</h4>
          <p class="justify-align">Aqui você pode acessar as configurações e modificar varias partes da sua empresa. Veja a área de clientes, de reservas, da sua conta e empresa.</p>
          <p class="justify-align light">Clique no botão de menu ao lado (<i class="material-icons tiny">menu</i>) para acessar as abas.</p>
          

    
  </body>
  </html>
  <?php } else { header("location:index.php"); } ?>