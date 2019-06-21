<?php
	   
class AdministradorDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM administrador WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM administrador';
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM administrador ORDER BY '.$coluna;
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("../config/conexao.php");
		$sql = 'DELETE FROM administrador WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($administrador){
		include("../config/conexao.php");
		$sql = 'INSERT INTO administrador (cod, login, senha) VALUES (:cod, :login, :senha)';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$administrador->getCod()); 
		$consulta->bindValue(':login',$administrador->getLogin()); 
		$consulta->bindValue(':senha',$administrador->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($administrador){
		include("../config/conexao.php");
		$sql = 'UPDATE administrador SET cod = :cod, login = :login, senha = :senha WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$administrador->getCod()); 
		$consulta->bindValue(':login',$administrador->getLogin()); 
		$consulta->bindValue(':senha',$administrador->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../config/conexao.php");
		$sql = 'DELETE FROM administrador';
		$consulta = $pdo->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>