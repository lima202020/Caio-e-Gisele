<?php 
include 'dados/dadosDoAdministrador_Cliente_Quarto.php';
$acqs = $administrador_cliente_quartoDAO->listarTodos();
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
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservas Feitas</title>
    

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="images/icons/material-icons.css">

    <!--JS-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    


    <script type="text/javascript">

      $(document).ready(function(){
        Materialize.updateTextFields();
        $(".button-collapse").sideNav();
        $(".navegacao").sideNav();
        $('select').material_select();
        $('.tooltipped').tooltip({delay: 100});
      });

    </script>
    
    <style type="text/css">

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
    
    <div class="row center s12">
      <h5>Reservas Feitas do Hotel</h5>
    </div>
    <div class="container">
      <table class="responsive-table highlight striped">

        <thead>
          <tr class="col s12">
            <th>Código</th>
            <th>Código do Cliente</th>
            <th>Código do Quarto</th>
            <th>Código do Administrador</th>
            <th>Data de Entrada</th>
            <th>Data de Saída</th>
            <th>Ações</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($acqs as $acq){ ?>
            <tr class="col s12"> 
              <td><?=$acq['cod']?></td>
              <td><?=$acq['cod_cliente']?></td>
              <td><?=$acq['cod_quarto']?></td>
              <td><?=$acq['cod_administrador']?></td>
              <td><?=$acq['data_inicio']?></td>
              <td><?=$acq['data_fim']?></td>
              <td>

                <a class="modal-trigger" href="#editar"  style="cursor: pointer; color: black;" onclick="popularModalEditar('<?=$cliente['cod']?>','<?=$cliente['nome']?>','<?=$cliente['data_nasc']?>','<?=$cliente['tel_celular']?>','<?=$cliente['tel_fixo']?>','<?=$cliente['email']?>','<?=$cliente['cep']?>','<?=$cliente['rua']?>','<?=$cliente['n_casa']?>','<?=$cliente['bairro']?>','<?=$cliente['cidade']?>','<?=$cliente['estado']?>','<?=$cliente['pais']?>')"><i class="material-icons waves-effect">edit</i></a>

                <a class="modal-trigger" href="#deletar" style="cursor: pointer; color: black;" onclick="popularModalApagar('<?=$cliente['cod']?>')"><i class="material-icons waves-effect">delete</i></a>

                <a class="modal-trigger"  href="#listar" style="cursor: pointer; color: black;"><i class="material-icons waves-effect">list</i></a>
              
              </td> 
            </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>

  </body>
  </html>
  <?php } else{ header('location:index.php'); } ?>