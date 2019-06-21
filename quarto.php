<?php 
include 'dados/dadosDoQuarto.php';
$quartos = $quartoDAO->listarTodos();
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
    <title>Quartos</title>
    

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
        $('.modal').modal();
        $('.tooltipped').tooltip({delay: 100});
      });

      function popularModalEditar(cod, tipo, numero, valor_diaria, andar){
        $('#codE').val(cod);
        $('#tipoE').val(tipo);
        $('#numeroE').val(numero);
        $('#valor_diariaE').val(valor_diaria);
        $('#andarE').val(andar);
        
        $('#codEd').val(cod);
      }

      function popularModalApagar(cod){
        $("#codA").val(cod);
      }

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
  <body style="margin-bottom: 10%;">

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
    
    <div class="row center">
      <h5 class="col s12">Quartos do Hotel</h5>
    </div>

    <div class="row center"> 
      <p class="col s12">Aqui você pode alterar as configurações na área de quartos que estão cadastrados no hotel.</p>
      <p class="col s12">Você pode adicionar mais quartos clicando no botão que está abaixo:</p>
      <a class="btn btn-floating waves-effect red modal-trigger" href="#adicionar"><i class="material-icons">add</i></a>
    </div>


    <div class="container">
      <table class="responsive-table highlight striped">

        <thead>
          <tr class="col s12">
            <th>Código</th>
            <th>Tipo de Quarto</th>
            <th>Número</th>
            <th>Andar</th>
            <th>Valor Diária</th>
            <th>Ações</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($quartos as $quarto){ ?>
            <tr class="col s12"> 
              <td><?=$quarto['cod']?></td>
              <td><?=$quarto['tipo']?></td>
              <td><?=$quarto['numero']?></td>
              <td><?=$quarto['andar']?></td>
              <td><?=$quarto['valor_diaria']?></td>
              <td>

                <a class="modal-trigger" href="#editar"  style="cursor: pointer; color: black;" onclick="popularModalEditar('<?=$quarto['cod']?>','<?=$quarto['tipo']?>','<?=$quarto['numero']?>','<?=$quarto['valor_diaria']?>','<?=$quarto['andar']?>')"><i class="material-icons waves-effect">edit</i></a>

                <a class="modal-trigger" href="#apagar" style="cursor: pointer; color: black;" onclick="popularModalApagar('<?=$quarto['cod']?>')"><i class="material-icons waves-effect">delete</i></a>

              </td> 
            </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>

    <!--<div id="adicionar" class="modal">
      <div class="modal-content">
        <h4>Insira os Valores:</h4>
        <form method="POST">
          
          <div class="row">
          
            <div class="input-field col m5">
              
              <i class="material-icons prefix">hotel</i>
              <input id="tipoAD" name="tipoAD" class="validate" required="" type="text">  
              <label class="active" data-error="Preencha este campo!">Tipo de Quarto:</label>
            </div>

            <div class="col m5 input-field">  
              <i class="material-icons prefix">local_convenience_store</i>
              <input id="numeroAD" name="numeroAD" type="text" class="validate">
              <label class="active">Número:</label>
            </div>
          
          </div>



          <div class="row">
          
            <div class="col m5">
              <div class="input-field">
                <i class="material-icons prefix">business</i>
                <input id="andarAD" name="andarAD" class="validate" type="text">
                <label class="active">Andar:</label>
              </div>
            </div>

            <div class="col m5">
              <div class="input-field">
                <span class="prefix">R$</span>
                <input id="valor_diariaAD" name="valor_diariaAD" class="validate" type="text" placeholder="00.0" required="">
                <label class="active" data-error="Preencha este campo!">Preço por Noite:</label>
              </div>
            </div>
          </div> 

          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect btn-flat">Cancelar</a>
            <input type="submit" class="btn-flat" name="confirmar" id="confirmar" value="Confirmar">
          </div>
        
        </form>
      </div>
    </div>-->


    <div id="editar" class="modal">
      <div class="modal-content">
        <h4>Editar:</h4>
        <form method="POST">

          <div class="row">

            <div class="input-field col m5">
              <input type="hidden" name="cod" id="codE">
              <i class="material-icons prefix">hotel</i>
              <input id="tipoE" name="tipo" class="validate" type="text" placeholder="">  
              <label class="active">Tipo de Quarto:</label>
            </div>

            <!-- Text input-->
            <div class="col m5 input-field">  
              <i class="material-icons prefix">local_convenience_store</i>
              <input id="numeroE" name="numero" type="text" class="validate" placeholder="">
              <label class="active">Número:</label>
            </div>

          </div>



          <!-- Prepended text-->
          <div class="row">
            <div class="col m5">
              <div class="input-field">
                <i class="material-icons prefix">business</i>
                <input id="andarE" name="andar" class="validate" type="text" placeholder="">
                <label class="active">Andar:</label>
              </div>
            </div>

            <div class="col m5">
              <div class="input-field">
                <span class="prefix">R$</span>
                <input id="valor_diariaE" name="valor_diaria" class="validate" type="text" placeholder="">
                <label class="active">Preço por Noite:</label>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect btn-flat">Cancelar</a>
            <input type="hidden" name="codEd" id="codEd">
            <input type="submit" class="" name="alterar" id="alterar" value="Alterar">
          </div>

        </form>
      </div>
    </div>

    <div id="apagar" class="modal">
      <div class="modal-content">
        <h4>Tem certeza que deseja excluir?</h4>
        <div class="modal-footer">
          <div class="row">
            <div class="col right">
              <form method="post">
                <input type="hidden" name="codA" id="codA">
                <input type="submit" name="botao" value="Excluir" id="botaoA" class=" waves-effect btn-flat red-text">
              </form>
            </div>
            <div class="col right">
              <button class="modal-action modal-close waves-effect btn-flat">Cancelar</button>
            </div>
          </div>
        </div>

      </div>    
    </div>



  </body>
  </html>
  <?php } else{ header('location:index.php'); } ?>