<?php 
include 'dados/dadosDaEmpresa.php';

$empresas = $empresaDAO->listarTodos();

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
		<title>Empresa</title>

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

				$("#editar").click(function(){
					$("#confirmar").removeClass("scale-out");
				});	
			});

			function editarEmpresa(){
				$("input").removeAttr("disabled");
				$("#confirmar").removeClass("scale-out");
				$("#cancelar").removeClass("scale-out");
			}

			function cancelar(){
				$("#confirmar").addClass("scale-out");
				$("#cancelar").addClass("scale-out");
				document.getElementsByTagName('input').setAttributte('disabled');
			}	

		</script>
		
		<style type="text/css">
			
			body{
				margin-bottom: 10%;
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
		<br>
		<div class="container row col s2 m6 center-align truncate">
			<h5>Aqui você pode vizualizar os dados da sua empresa.</h5>
		</div>

		<div class="row container">
			<form method="POST">
				<?php foreach ($empresas as $empresa) { ?> 
					<div class="row">
						<div> 
							<input type="hidden" name="cod" id="cod" value='<?=$empresa['cod']?>'>
						</div>
						<div class="col s4 m4">
							<h6>Nome:</h6> 
							<input type="text" disabled="" name="nome" id="nome" value='<?=$empresa['nome']?>'>
						</div>
						<div class="col s4 m8">
							<h6>Email:</h6> 
							<input type="text" disabled="" name="email" id="email" value='<?=$empresa['email']?>'>
						</div>
					</div>

					<div class="row">
						<div class="col s4 m4">
							<h6>Número:</h6> 
							<input type="text" disabled="" name="num" id="num" value='<?=$empresa['num']?>'>
						</div>
						<div class="col s4 m4">
							<h6>Rua:</h6> 
							<input type="text" disabled="" name="rua" id="rua" value='<?=$empresa['rua']?>'>
						</div>
						<div class="col s4 m4">
							<h6>Bairro:</h6> 
							<input type="text" disabled="" name="bairro" id="bairro"  value='<?=$empresa['bairro']?>'>
						</div>
					</div>
					<div class="row">
						<div class="col s4 m4">
							<h6>Cidade:</h6> 
							<input type="text" disabled="" name="cidade" id="cidade" value='<?=$empresa['cidade']?>'>
						</div>
						<div class="col s4 m4">
							<h6>Estado:</h6> 
							<input type="text" disabled="" name="estado" id="estado" value='<?=$empresa['estado']?>'>
						</div>
						<div class="col s4 m4">
							<h6>País:</h6> 
							<input type="text" disabled="" name="pais" id="pais" value='<?=$empresa['pais']?>'>
						</div>
					</div>

					<div class="row">
						<div class="col s4 m4">
							<h6>Cep:</h6> 
							<input type="text" disabled="" name="cep" id="cep" value='<?=$empresa['cep']?>'>
						</div>
						<div class="col s4 m4">
							<h6>Celular:</h6> 
							<input type="text" disabled="" name="tel_celular" id="tel_celular" value='<?=$empresa['tel_celular']?>'>
						</div>
						<div class="col s4 m4">
							<h6>Fixo:</h6> 
							<input type="text" disabled="" name="tel_fixo" id="tel_fixo" value='<?=$empresa['tel_fixo']?>'>
						</div>
					</div>

					<div class="row">
						<div class="col s4 m4">
							<h6>Twitter:</h6> 
							<input type="text" disabled="" name="twitter" id="twitter" value='<?=$empresa['twitter']?>'>
						</div>
						<div class="col s4 m4">
							<h6>Instagram:</h6> 
							<input type="text" disabled="" name="instagram" id="instagram" value='<?=$empresa['instagram']?>'>
						</div>
						<div class="col s4 m4">
							<h6>Facebook:</h6> 
							<input type="text" disabled="" name="facebook" id="facebook" value='<?=$empresa['facebook']?>'>
						</div>
					</div>
				<?php } ?>	
				<div class="row">
					<div class="col s6 m11">
						<button type="submit" id="confirmar" name="confirmar" class="btn-floating btn-large waves-effect scale-transition scale-out green" value="Confirmar">
							<i class="material-icons">done</i>
						</button>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col s1 m1">
					<button class="btn btn-floating btn-large blue waves-effect" onclick="editarEmpresa()" id="editar"><i class="material-icons">edit</i></button>
				</div>
				<div class="col s1 m1">
					<a href="#!" id="cancelar" name="cancelar" class="btn-floating btn-large waves-effect scale-transition scale-out red" onclick="cancelar()" value="Confirmar">
						<i class="material-icons">close</i>
					</a>
				</div>
			</div>
		</body>
		</html>
		<?php } else { header("location:index.php"); } ?>