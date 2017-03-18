<?php
		session_start();
		session_destroy();
		echo"<script language = 'javascript'>alert('Deslogado com Sucesso')</script>";
		echo "<script language = 'javascript'>location.href = 'login.php'</script>";
		//header("Location: login.php");
?>