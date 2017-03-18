<?php 
	include ("../conexao/conexao.php");
	//pega dados do formulario
	$login = $_POST['login'];
	$senha = md5($_POST['senha']);
	
	//comandos sql
	$cmd['login'] = "SELECT * FROM equipe WHERE eq_login = '$login' and eq_senha = '$senha'";
	
	//consultas
	$query['login'] = mysql_query($cmd['login']) or die (mysql_error());
	
	//pegar variaveis do banco para criar as sessions
	while($linha = mysql_fetch_array($query['login'])) {
		$login_usuario = $linha['eq_login'];
		$login_senha = $linha['eq_senha'];
		$login_funcao = $linha['eq_funcao'];
	}
	
	//contar os registros
	$contar = mysql_num_rows($query['login']);
	
	//verifica se tem registros pela a variavel contadora
	if($contar == 0) {
		echo "<script language = \"javascript\">alert(\"Login e Senha Nao Corresponde\")</script>";
		header("Location: login.php");
	}
	else {
		session_start();
		$_SESSION['login'] = $login_usuario;
		$_SESSION['senha'] = $login_senha;
		$_SESSION['funcao'] = $login_funcao;
		header("Location: index.php?acao=boasvindas");
	}
	
?>