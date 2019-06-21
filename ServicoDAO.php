<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class ServicoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM servico WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM servico';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM servico ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("../config/conexao.php");
		$sql = 'DELETE FROM servico WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($servico){
		include("../config/conexao.php");
		$sql = 'INSERT INTO servico (cod, tipo, num_confir, preco_diaria) VALUES (:cod, :tipo, :num_confir, :preco_diaria)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$servico->getCod()); 
		$consulta->bindValue(':tipo',$servico->getTipo()); 
		$consulta->bindValue(':num_confir',$servico->getNum_confir()); 
		$consulta->bindValue(':preco_diaria',$servico->getPreco_diaria()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($servico){
		include("../config/conexao.php");
		$sql = 'UPDATE servico SET cod = :cod, tipo = :tipo, num_confir = :num_confir, preco_diaria = :preco_diaria WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$servico->getCod()); 
		$consulta->bindValue(':tipo',$servico->getTipo()); 
		$consulta->bindValue(':num_confir',$servico->getNum_confir()); 
		$consulta->bindValue(':preco_diaria',$servico->getPreco_diaria()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../config/conexao.php");
		$sql = 'DELETE FROM servico';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>