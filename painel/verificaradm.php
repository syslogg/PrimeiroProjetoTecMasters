<?php 
	include("../conexao/conexao.php");
	session_start();
	if(!isset($_SESSION['login'])) {
		session_destroy();
		header('Location: login.php');
		exit();
	}
	if($_SESSION['funcao'] != "adm"){
			echo"<script type= \"text/javascript\">location.href=\"index.php?acao=recusa\"</script>";
			exit();
		}
	$session_login = $_SESSION['login'];
	$cmd_sql = "SELECT * FROM equipe WHERE eq_login = '$session_login'";
	$cmd_query = mysql_query($cmd_sql) or die (mysql_error());
	
	while($linha_cmd = mysql_fetch_array($cmd_query)) {
		$_SESSION['id'] = $linha_cmd['eq_id'];
		$_SESSION['nome'] = $linha_cmd['eq_nome'];
		$_SESSION['idade'] = $linha_cmd['eq_idade'];
		$_SESSION['desc'] = $linha_cmd['eq_desc'];
		$_SESSION['email'] = $linha_cmd['eq_email'];
		$_SESSION['foto'] = $linha_cmd['eq_foto'];
		$_SESSION['funcao'] = $linha_cmd['eq_funcao'];
	}
	
	$id = $_SESSION['id'];
	$nome = $_SESSION['nome'];
	$idade = $_SESSION['idade'];
	$desc = $_SESSION['desc'];
	$email = $_SESSION['email'];
	$senha = $_SESSION['senha'];

	
?>