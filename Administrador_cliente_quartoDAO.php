<?php
	   
class Administrador_cliente_quartoDAO{

	public function carregar($cod){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM administrador_cliente_quarto WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM administrador_cliente_quarto';
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM administrador_cliente_quarto ORDER BY '.$coluna;
		$consulta = $pdo->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($cod){
		include("../config/conexao.php");
		$sql = 'DELETE FROM administrador_cliente_quarto WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function cadastrar($administrador_cliente_quarto){
		include("../config/conexao.php");
		$sql = 'INSERT INTO administrador_cliente_quarto (cod, cod_cliente, cod_quarto, cod_administrador, num_reserva, data_inicio, data_fim, hora, tipo_pagamento, qtd_adulto, qtd_crianca) VALUES (:cod, :cod_cliente, :cod_quarto, :cod_administrador, :num_reserva, :data_inicio, :data_fim, :hora, :tipo_pagamento, :qtd_adulto, :qtd_crianca)';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$administrador_cliente_quarto->getCod()); 
		$consulta->bindValue(':cod_cliente',$administrador_cliente_quarto->getFk_Cliente()); 
		$consulta->bindValue(':cod_quarto',$administrador_cliente_quarto->getFk_Quarto()); 
		$consulta->bindValue(':cod_administrador',$administrador_cliente_quarto->getFk_Administrador()); 
		$consulta->bindValue(':num_reserva',$administrador_cliente_quarto->getNum_reserva()); 
		$consulta->bindValue(':data_inicio',$administrador_cliente_quarto->getData_inicio()); 
		$consulta->bindValue(':data_fim',$administrador_cliente_quarto->getData_fim()); 
		$consulta->bindValue(':hora',$administrador_cliente_quarto->getHora()); 
		$consulta->bindValue(':tipo_pagamento',$administrador_cliente_quarto->getTipo_pagamento()); 
		$consulta->bindValue(':qtd_adulto',$administrador_cliente_quarto->getQtd_adulto()); 
		$consulta->bindValue(':qtd_crianca',$administrador_cliente_quarto->getQtd_crianca()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($administrador_cliente_quarto){
		include("../config/conexao.php");
		$sql = 'UPDATE administrador_cliente_quarto SET cod = :cod, cod_cliente = :cod_cliente, cod_quarto = :cod_quarto, cod_administrador = :cod_administrador, num_reserva = :num_reserva, data_inicio = :data_inicio, data_fim = :data_fim, hora = :hora, tipo_pagamento = :tipo_pagamento, qtd_adulto = :qtd_adulto, qtd_crianca = :qtd_crianca WHERE cod = :cod';
		$consulta = $pdo->prepare($sql);
		$consulta->bindValue(':cod',$administrador_cliente_quarto->getCod()); 
		$consulta->bindValue(':cod_cliente',$administrador_cliente_quarto->getCod_cliente()); 
		$consulta->bindValue(':cod_quarto',$administrador_cliente_quarto->getCod_quarto()); 
		$consulta->bindValue(':cod_administrador',$administrador_cliente_quarto->getCod_administrador()); 
		$consulta->bindValue(':num_reserva',$administrador_cliente_quarto->getNum_reserva()); 
		$consulta->bindValue(':data_inicio',$administrador_cliente_quarto->getData_inicio()); 
		$consulta->bindValue(':data_fim',$administrador_cliente_quarto->getData_fim()); 
		$consulta->bindValue(':hora',$administrador_cliente_quarto->getHora()); 
		$consulta->bindValue(':tipo_pagamento',$administrador_cliente_quarto->getTipo_pagamento()); 
		$consulta->bindValue(':qtd_adulto',$administrador_cliente_quarto->getQtd_adulto()); 
		$consulta->bindValue(':qtd_crianca',$administrador_cliente_quarto->getQtd_crianca()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../config/conexao.php");
		$sql = 'DELETE FROM administrador_cliente_quarto';
		$consulta = $pdo->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>