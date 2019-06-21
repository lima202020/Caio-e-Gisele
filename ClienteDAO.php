<?php
 
class ClienteDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM cliente WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM cliente';
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM cliente ORDER BY '.$coluna;
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("../config/conexao.php");
		$sql = 'DELETE FROM cliente WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function cadastrar($cliente){
		include("../config/conexao.php");
		$sql = 'INSERT INTO cliente (cod, n_casa, rua, bairro, cidade, estado, pais, cep, data_nasc, nome, tel_celular, tel_fixo, email) VALUES (:cod, :n_casa, :rua, :bairro, :cidade, :estado, :pais, :cep, :data_nasc, :nome, :tel_celular, :tel_fixo, :email)';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$cliente->getCod()); 
		$consulta->bindValue(':n_casa',$cliente->getN_casa()); 
		$consulta->bindValue(':rua',$cliente->getRua()); 
		$consulta->bindValue(':bairro',$cliente->getBairro()); 
		$consulta->bindValue(':cidade',$cliente->getCidade()); 
		$consulta->bindValue(':estado',$cliente->getEstado()); 
		$consulta->bindValue(':pais',$cliente->getPais()); 
		$consulta->bindValue(':cep',$cliente->getCep()); 
		$consulta->bindValue(':data_nasc',$cliente->getData_nasc()); 
		$consulta->bindValue(':nome',$cliente->getNome()); 
		$consulta->bindValue(':tel_celular',$cliente->getTel_celular()); 
		$consulta->bindValue(':tel_fixo',$cliente->getTel_fixo()); 
		$consulta->bindValue(':email',$cliente->getEmail()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($cliente){
		include("../config/conexao.php");
		$sql = 'UPDATE cliente SET n_casa = :n_casa, rua = :rua, bairro = :bairro, cidade = :cidade, estado = :estado, pais = :pais, cep = :cep, data_nasc = :data_nasc, nome = :nome, tel_celular = :tel_celular, tel_fixo = :tel_fixo, email = :email WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$cliente->getCod()); 
		$consulta->bindValue(':n_casa',$cliente->getN_casa()); 
		$consulta->bindValue(':rua',$cliente->getRua()); 
		$consulta->bindValue(':bairro',$cliente->getBairro()); 
		$consulta->bindValue(':cidade',$cliente->getCidade()); 
		$consulta->bindValue(':estado',$cliente->getEstado()); 
		$consulta->bindValue(':pais',$cliente->getPais()); 
		$consulta->bindValue(':cep',$cliente->getCep()); 
		$consulta->bindValue(':data_nasc',$cliente->getData_nasc()); 
		$consulta->bindValue(':nome',$cliente->getNome()); 
		$consulta->bindValue(':tel_celular',$cliente->getTel_celular()); 
		$consulta->bindValue(':tel_fixo',$cliente->getTel_fixo()); 
		$consulta->bindValue(':email',$cliente->getEmail()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../config/conexao.php");
		$sql = 'DELETE FROM cliente';
		$consulta = $pdo->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function pesquisar($pesquisar){
		include '../config/conexao.php';
		$sql = 'SELECT * FROM cliente WHERE nome LIKE %:pesquisar%';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':pesquisar',$pesquisar);
		if ($consulta->execute()) {
			return true;		
		}else{
			return false;
		}		
	}
}
?>