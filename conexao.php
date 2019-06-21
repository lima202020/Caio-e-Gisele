<?php 
	
	class Conexao{
		private $host = "localhost";
		private $usuario = "root";
		private $senha = "";
		private $nomeBanco = "hotel";

		public function conecta(){
			try{
				$conexao = new PDO('mysql:host='.$this->host.';dbname='.$this->nomeBanco.';charset=utf8', $this->usuario, $this->senha);
				return $conexao;
			}
			catch(PDOException $erro){
				echo $erro->getMessage();
				return false;
			}
		}

	}
	$conexao = new Conexao();
	$pdo = $conexao->conecta();
?>