<?php 
session_start();

include_once "../config/conexao.php";

$nomeLogin = (isset($_POST['nomeLogin'])) ? $_POST['nomeLogin'] : "";
$senhaLogin = (isset($_POST['senhaLogin'])) ? $_POST['senhaLogin'] : "";
$incorreto = ""; 

if(!empty($nomeLogin) && !empty($senhaLogin)){
	try{
		$senhaLogin = md5($senhaLogin);
		$sql = "SELECT * FROM administrador WHERE login = :login AND senha = :senha";
		$result = $pdo->prepare($sql);
		$result->bindValue(':login',$nomeLogin);
		$result->bindValue(':senha',$senhaLogin);
		$result->execute();
		$result = $result->fetchAll(PDO::FETCH_ASSOC);
	}catch(PDOException $erro){
		echo $erro->getMessage();
	}

	if (count($result) > 0) {
		$_SESSION['nomeLogin'] = $result[0]['login'];
		$_SESSION['senhaLogin'] = $result[0]['senha'];
		header('location:AdminView.php'); 
	}else{
		$incorreto = "Nome ou Senha Incorretos!";
	}
}
?>