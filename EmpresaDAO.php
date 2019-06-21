<?php

class EmpresaDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM empresa WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM empresa';
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM empresa ORDER BY '.$coluna;
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("../config/conexao.php");
		$sql = 'DELETE FROM empresa WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($empresa){
		include("../config/conexao.php");
		$sql = 'INSERT INTO empresa (cod, cnpj, nome, email, slogan, num, rua, bairro, cidade, estado, pais, cep, tel_celular, tel_fixo, twitter, instagram, facebook, foto) VALUES (:cod, :cnpj, :nome, :email, :slogan, :num, :rua, :bairro, :cidade, :estado, :pais, :cep, :tel_celular, :tel_fixo, :twitter, :instagram, :facebook, :foto)';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$empresa->getCod()); 
		$consulta->bindValue(':cnpj',$empresa->getCnpj()); 
		$consulta->bindValue(':nome',$empresa->getNome()); 
		$consulta->bindValue(':email',$empresa->getEmail()); 
		$consulta->bindValue(':slogan',$empresa->getSlogan()); 
		$consulta->bindValue(':num',$empresa->getNum()); 
		$consulta->bindValue(':rua',$empresa->getRua()); 
		$consulta->bindValue(':bairro',$empresa->getBairro()); 
		$consulta->bindValue(':cidade',$empresa->getCidade()); 
		$consulta->bindValue(':estado',$empresa->getEstado()); 
		$consulta->bindValue(':pais',$empresa->getPais()); 
		$consulta->bindValue(':cep',$empresa->getCep()); 
		$consulta->bindValue(':tel_celular',$empresa->getTel_celular()); 
		$consulta->bindValue(':tel_fixo',$empresa->getTel_fixo()); 
		$consulta->bindValue(':twitter',$empresa->getTwitter()); 
		$consulta->bindValue(':instagram',$empresa->getInstagram()); 
		$consulta->bindValue(':facebook',$empresa->getFacebook()); 
		$consulta->bindValue(':foto',$empresa->getFoto()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($empresa){
		include("../config/conexao.php");
		$sql = 'UPDATE empresa SET cod = :cod, cnpj = :cnpj, nome = :nome, email = :email, slogan = :slogan, num = :num, rua = :rua, bairro = :bairro, cidade = :cidade, estado = :estado, pais = :pais, cep = :cep, tel_celular = :tel_celular, tel_fixo = :tel_fixo, twitter = :twitter, instagram = :instagram, facebook = :facebook, foto = :foto WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$empresa->getCod()); 
		$consulta->bindValue(':cnpj',$empresa->getCnpj()); 
		$consulta->bindValue(':nome',$empresa->getNome()); 
		$consulta->bindValue(':email',$empresa->getEmail()); 
		$consulta->bindValue(':slogan',$empresa->getSlogan()); 
		$consulta->bindValue(':num',$empresa->getNum()); 
		$consulta->bindValue(':rua',$empresa->getRua()); 
		$consulta->bindValue(':bairro',$empresa->getBairro()); 
		$consulta->bindValue(':cidade',$empresa->getCidade()); 
		$consulta->bindValue(':estado',$empresa->getEstado()); 
		$consulta->bindValue(':pais',$empresa->getPais()); 
		$consulta->bindValue(':cep',$empresa->getCep()); 
		$consulta->bindValue(':tel_celular',$empresa->getTel_celular()); 
		$consulta->bindValue(':tel_fixo',$empresa->getTel_fixo()); 
		$consulta->bindValue(':twitter',$empresa->getTwitter()); 
		$consulta->bindValue(':instagram',$empresa->getInstagram()); 
		$consulta->bindValue(':facebook',$empresa->getFacebook()); 
		$consulta->bindValue(':foto',$empresa->getFoto()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../config/conexao.php");
		$sql = 'DELETE * FROM empresa';
		$consulta = $pdo->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>