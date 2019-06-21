<?php 
include 'dados/dadosDoCliente.php';
$clientes = $clienteDAO->listarTodos();
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
		<title>Tabela de Clientes</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

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
				$('.navegacao').sideNav();
				$('.modal').modal();
				Materialize.updateTextFields();
				$('.tooltipped').tooltip({delay: 50});
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

		<script type="text/javascript">

			function popularModalEditar(cod, nome, data_nasc, tel_celular, tel_fixo, email, cep, rua, n_casa, bairro, cidade, estado, pais){
				$('#codE').val(cod);
				$('#nomeE').val(nome);
				$('#data_nascE').val(data_nasc);
				$('#tel_celularE').val(tel_celular);
				$('#tel_fixoE').val(tel_fixo);
				$('#emailE').val(email);
				$('#cepE').val(cep);
				$('#ruaE').val(rua);
				$('#n_casaE').val(n_casa);
				$('#bairroE').val(bairro);
				$('#cidadeE').val(cidade);
				$('#estadoE').val(estado);
				$('#paisE').val(pais);
				
				$('#codEd').val(cod);
			}

			function popularModalApagar(cod){
				$('#codA').val(cod);
			}



		</script>

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
		<br>
		<div class="row" align="center">
			<h4>Clientes Cadastrados</h4>
		</div>
		<div class="container">
			<!--
			<form>
				<div class="row" style="margin-left: 30%">
					<div class="col s6 m6 input-field">
						<i class="material-icons prefix">search</i>
						<input id="search" type="search" name="pesquisar">
						<i class="material-icons" >close</i>
					</div>
				</div>
			</form>
		-->
		<table class="responsive-table highlight striped">
			<thead>
				<tr class="col s12">
					<th>Cód.</th>
					<th>Nome</th>
					<th>Data de Nasc.</th>
					<th>Email</th>
					<th>Celular</th>
					<th>Fixo</th>
					<th>Endereço</th>
					<th>Ações</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($clientes as $cliente){ ?>
					<tr class="col s12"> 
						<td><?=$cliente['cod']?></td>
						<td><?=$cliente['nome']?></td>
						<td><?=$cliente['data_nasc']?></td>
						<td><?=$cliente['email']?></td>
						<td><?=$cliente['tel_celular']?></td>
						<td><?=$cliente['tel_fixo']?></td>
						<td><?=$cliente['rua']?>, <?=$cliente['estado']?></td>
						<td>

							<a class="modal-trigger" href="#editar"  style="cursor: pointer; color: black;" onclick="popularModalEditar('<?=$cliente['cod']?>','<?=$cliente['nome']?>','<?=$cliente['data_nasc']?>','<?=$cliente['tel_celular']?>','<?=$cliente['tel_fixo']?>','<?=$cliente['email']?>','<?=$cliente['cep']?>','<?=$cliente['rua']?>','<?=$cliente['n_casa']?>','<?=$cliente['bairro']?>','<?=$cliente['cidade']?>','<?=$cliente['estado']?>','<?=$cliente['pais']?>')"><i class="material-icons waves-effect">edit</i></a>

							<a class="modal-trigger" href="#deletar" style="cursor: pointer; color: black;" onclick="popularModalApagar('<?=$cliente['cod']?>')"><i class="material-icons waves-effect">delete</i></a>
						</td>	
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<!-- Modal Structure -->
	<div id="editar" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Editar:</h4>
			<form method="POST">
				<div class="row">
					<div class="input-field col m5">
						<i class="material-icons prefix">account_box</i>
						<input id="nomeE" name="nome" class="validate" type="text" placeholder="">  
						<label for="Nome" class="active">Nome:</label>
					</div>

					<!-- Text input -->
					<div class="col m3 input-field">  
						<i class="material-icons prefix">perm_contact_calendar</i>
						<input id="data_nascE" name="data_nasc" placeholder="DD/MM/AAAA" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()" class="validate">
						<label for="Nascimento" class="active" data-error="Preencha este campo">Nascimento:</label>

					</div>
				</div>



				<!-- Prepended text-->
				<div class="row">
					<div class="col m5">
						<div class="input-field">
							<i class="material-icons prefix">phone</i>
							<input id="tel_celularE" name="tel_celular" class="validate" placeholder="XX XXXXX-XXXX"  type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
							OnKeyPress="formatar('## #####-####', this)">
							<label class="active" data-error="Preencha este campo">Telefone Celular*</label>
						</div>
					</div>

					<div class="col m5">
						<div class="input-field">
							<i class="material-icons prefix">phone</i>
							<input id="tel_fixoE" name="tel_fixo" class="" placeholder="XX XXXXX-XXXX" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
							OnKeyPress="formatar('## #####-####', this)">
							<label class="active">Telefone Fixo (opcional)</label>
						</div>
					</div>
				</div> 

				<br>
				<!-- Prepended text-->
				<div class="input-field">
					<i class="material-icons prefix">email</i>
					<input id="emailE" name="email" class="validate" placeholder="email@email.com"  type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
					<label class="active" data-error="Preencha este campo e coloque o seu email por completo!">Email</label>
				</div>

				<br><br>
				<!-- Search input-->
				<div class="row">
					<h5 class="">Endereço:</h5>
				</div>
				<div class="input-field">
					<div class="col m4">
						<input id="cepE" name="cep"  placeholder="" type="search" maxlength="8" pattern="[0-9]+$">
						<label class="active" data-error="Preencha este campo e coloque o seu email por completo!">Cep</label>
					</div>
				</div>

				<table class="responsive-table">
					<div class="row"></div>
					<tbody>
						<tr>
							<td>
								<div class="input-field col m10">
									<input id="ruaE" name="rua"  type="text" placeholder="">
									<label class="active">Rua</label>
								</div>
							</td>

							<td>
								<div class="input-field col m4">
									<input id="n_casaE" name="n_casa"  placeholder="" class="validate" type="text">
									<label class="active" data-error="Preencha este campo">N°</label>
								</div>
							</td>

							<td>
								<div class="input-field col m10">
									<input id="bairroE" name="bairro"  type="text" placeholder="">
									<label class="active">Bairro</label>
								</div>
							</td>
						</tr>

						<tr>
							<td>
								<div class="input-field col m10">
									<input id="cidadeE" name="cidade"   type="text" placeholder="">
									<label class="active">Cidade</label>
								</div>
							</td>

							<td>
								<div class="input-field col m10">
									<input id="estadoE" name="estado"  type="text" placeholder="">
									<label class="active">Estado</label>
								</div>
							</td>

							<td>
								<div class="input-field col m10">
									<input id="paisE" name="pais" type="text" placeholder="">
									<label class="active">País</label>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect btn-flat">Cancelar</a>
				<input type="hidden" name="codEd" id="codEd">
				<input type="submit" class="btn-flat blue-text btn modal-action" name="confirmar" id="" value="Confirmar">
			</div>
		</form>
	</div>
</div>


<div id="deletar" class="modal">
	<div class="modal-content">
		<h4>Tem certeza que deseja excluir?</h4>
	</div>
	<div class="modal-footer">
		<div class="row">
			<div class="col right">
				<form method="post">
					<input type="hidden" name="codA" id="codA">
					<input type="submit" name="botao" value="Excluir" id="botaoA" class="waves-effect btn-flat red-text">
				</form>
			</div>
			<div class="col right">
				<button class="modal-action modal-close waves-effect btn-flat">Cancelar</button>
			</div>
		</div>
	</div>

</div>


</body>

</html>
<?php } else { header("location:index.php"); } ?>