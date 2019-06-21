<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class Cliente_servicoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM cliente_servico WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM cliente_servico';
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM cliente_servico ORDER BY '.$coluna;
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("../config/conexao.php");
		$sql = 'DELETE FROM cliente_servico WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($cliente_servico){
		include("../config/conexao.php");
		$sql = 'INSERT INTO cliente_servico (cod, cod_servico, cod_cliente) VALUES (:cod, :cod_servico, :cod_cliente)';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$cliente_servico->getCod()); 
		$consulta->bindValue(':cod_servico',$cliente_servico->getCod_servico()); 
		$consulta->bindValue(':cod_cliente',$cliente_servico->getCod_cliente()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($cliente_servico){
		include("../config/conexao.php");
		$sql = 'UPDATE cliente_servico SET cod = :cod, cod_servico = :cod_servico, cod_cliente = :cod_cliente WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$cliente_servico->getCod()); 
		$consulta->bindValue(':cod_servico',$cliente_servico->getCod_servico()); 
		$consulta->bindValue(':cod_cliente',$cliente_servico->getCod_cliente()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../config/conexao.php");
		$sql = 'DELETE FROM cliente_servico';
		$consulta = $pdo->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>