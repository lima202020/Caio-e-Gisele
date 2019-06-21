<?php
	   
class QuartoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM quarto WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM quarto';
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM quarto ORDER BY '.$coluna;
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("../config/conexao.php");
		$sql = 'DELETE FROM quarto WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function cadastrar($quarto){
		include("../config/conexao.php");
		$sql = 'INSERT INTO quarto (cod, tipo, numero, valor_diaria, andar) VALUES (:cod, :tipo, :numero, :valor_diaria, :andar)';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$quarto->getCod()); 
		$consulta->bindValue(':tipo',$quarto->getTipo()); 
		$consulta->bindValue(':numero',$quarto->getNumero()); 
		$consulta->bindValue(':valor_diaria',$quarto->getValor_diaria()); 
		$consulta->bindValue(':andar',$quarto->getAndar()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($quarto){
		include("../config/conexao.php");
		$sql = 'UPDATE quarto SET cod = :cod, tipo = :tipo, numero = :numero, valor_diaria = :valor_diaria, andar = :andar WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$quarto->getCod()); 
		$consulta->bindValue(':tipo',$quarto->getTipo()); 
		$consulta->bindValue(':numero',$quarto->getNumero()); 
		$consulta->bindValue(':valor_diaria',$quarto->getValor_diaria()); 
		$consulta->bindValue(':andar',$quarto->getAndar()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../config/conexao.php");
		$sql = 'DELETE FROM quarto';
		$consulta = $pdo->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>