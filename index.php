<?php 
include 'Entrar.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Entrar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="images/icons/material-icons.css">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>

	<style type="text/css">
		html,
		body {
			height: 100%;
		}
		html {
			display: table;
			margin: auto;
		}
		body {
			display: table-cell;
			vertical-align: middle;
			background: #B22222;
		}

		#login-page {
			width: 500px;
		}

		.card {
			position: absolute;
			left: 50%;
			top: 50%;
			-moz-transform: translate(-50%, -50%);
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			-o-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}

	</style>

	<script type="text/javascript">
		
		$(document).ready(function(){
			Materialize.updateTextFields();
			$('select').material_select();
			$('#incorreto').fadeIn(400);
		});

	</script>

</head>

<body ng-app="mainModule" ng-controller="mainController">
	<div id="login-page" class="row">
		<div class="col s12 z-depth-6 card-panel">
			<form class="login-form"  method="post">
				<!--<div class="row">
					<img src="images/Rubi.jpeg" class="responsive-img col s12" style="width: 10%; margin-left: 45%; margin-top: 2%">
				</div>-->
				<div class="row">
					<h5 class="center col s12" style="margin-top: 10%">Login</h5>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">person_outline</i>
						<input class="validate" required="" name="nomeLogin" id="nomeLogin" type="text">
						<label for="nomeLogin" data-error="Digite seu nome ou email.">Nome ou Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">lock_outline</i>
						<input id="senhaLogin" class="validate" required="" name="senhaLogin" type="password">
						<label for="senhaLogin" data-error="Digite sua senha.">Senha</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 center">
							<div class="red-text" id="incorreto"><?php echo $incorreto; ?></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 center">
						<input type="submit" name="entrar" id="entrar" class="btn botao waves-effect red" value="Entrar">
					</div>
				</div>

			</form>
		</div>
	</div> 
</body>


</html>