<?php 
include 'dados/dadosDoAdmin.php';
$administradores = $administradorDAO->listarTodos();
include 'Entrar.php';


if (isset($_GET['sair'])) {
  if ($_GET['sair'] == true) {
    unset($_SESSION['nomeLogin']);
    session_destroy();
  }

}

$senhaAntiga = (isset($_POST['senhaAntiga'])) ? $_POST['senhaAntiga'] : "";
$senhaAntiga = md5($senhaAntiga);

if ($senhaAntiga == "true") {
  if ($senhaAntiga == $_SESSION['senhaLogin']) {
    return true;
  }
}


if(!empty($_SESSION['nomeLogin'])){
  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minha Conta</title>
    

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
        
        /*$("#editarLogin").click(function(){
          $("#confirmarLogin").removeClass("scale-out");
        });*/

      });

      function alterar(){
        Materialize.toast("<i class='material-icons' id='ic' style='color: green; letter-spacing: 5px;'>check</i><span>Administrador alterado com sucesso.</span>", 500);
      }

      function editarLogin(){
        $("input").removeAttr("disabled");
        $("#confirmar").removeClass("scale-out");
        $("#cancelar").removeClass("scale-out");
      }

      function cancelar(){
        $("#confirmar").addClass("scale-out");
        $("#cancelar").addClass("scale-out");
        document.getElementsByTagName('input').setAttributte('disabled');
      }

      function ms(){
        $(".mensagem").show();
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
    <div class="container">
      <!--MENSAGEM-->
      <div class="row">
        <h4 style="margin-top: 5%;" class="center-align">Modifique as suas configurações</h4>
      </div>
      
      <!--CAMPO DE MODIFICAÇÕES-->
      <form method="POST">

        <?php foreach ($administradores as $administrador){ ?>

          <input type="hidden" name="cod" id="cod" value="<?=$administrador['cod']?>">

          <div class="row" style="margin-top: 6%">
            <div class="col s6 m6 input-field" style="font-size: 14pt">
              <input type="text" onclick="ms()" name="login" required="" disabled="" id="login" class="validate" value="<?=$administrador['login']?>">
              <label class="active" data-error='Este campo não pode estar vazio'>Nome de Login:</label>
            </div>
          </div>
        <?php } ?>

        <div class="row">
          <div class="col s5 m5 input-field">
            <input type="password" name="senhaAntiga" required="" disabled="" id="senhaAntiga" class="validate">
            <label class="active" data-error='Este campo não pode estar vazio'>Senha Antiga:</label>
          </div>

          <div class="col s5 m5 input-field">
            <input type="password" onclick="ms()" disabled="" name="senha" id="senha" class="validate" required="">
            <label class="active" data-error='Este campo não pode estar vazio'>Nova Senha:</label>
          </div>
        </div>

        <div class="row">
          <div class="col s1 m1">
            <a class="btn btn-floating blue btn-large waves-effect" href="#" onclick="editarLogin()" ><i class="material-icons" id="editarLogin">edit</i></a>
          </div>
          <div class="col s1 m1">
            <button type="submit" id="confirmar" name="confirmar" class="btn-floating btn-large waves-effect scale-transition green scale-out" onclick="alterar()" value="Confirmar">
              <i class="material-icons">done</i>
            </button>
          </div>
          <div class="col s1 m1">
          <a href="#!" id="cancelar" name="cancelar" class="btn-floating btn-large waves-effect scale-transition scale-out red" onclick="cancelar()" value="Confirmar">
            <i class="material-icons">close</i>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m12">
          <span class="mensagem" style="display: none;">Atenção: Quando alterar suas informações você redirecionado para a página de Login.</span>
        </div>
      </div>

    </form>
  </div>

</body>
</html>
<?php } else{ header('location:index.php'); } 



?>