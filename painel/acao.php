<?php
include ("verificar.php");
					
	$sn_nova = md5($_POST['sn_nova']);
	$desc_fild = $_POST['desc'];
	$titulo_tuto = $_POST['titulo'];
	$corpo = $_POST['corpo'];
	
				
			
				if($_GET['acao'] == "senha"){
					$renew = mysql_query("UPDATE equipe SET eq_senha = '$sn_nova' WHERE eq_id = '$id'");
					echo "<script language = 'javascript'>alert('Senha Alterada com Sucesso')</script>";
					header("Location: index.php?acao=senha");
				}
				
				if($_GET['acao'] == "desc"){
					$desc = mysql_query("UPDATE equipe SET eq_desc = '$desc_fild' WHERE eq_id = '$id'");
					header("Location: index.php?acao=desc");
				}
				if($_GET['acao'] == "edituto") {
						$edituto = mysql_query("UPDATE tutoriais SET tuto_titulo = '$titulo_tuto' tuto_desc = '$desc_fild' tuto_corpo = '$corpo'");
						header("Location:index.php?acao=edituto");
				}
				if($_GET['acao'] == "newuser"){
					include("verificaradm.php");
					$nome_user = $_POST['nome_user'];
					$nascimento = $_POST['nascimento'];
					$login = $_POST['login'];
					$senha_user = md5($_POST['senha_user']);
					$email_user = $_POST['email'];
					$foto = $_POST['foto'];
					$desc = $_POST['desc'];
					$funcao = $_POST['funcao'];
					
					$cmd['newuser'] = "INSERT INTO equipe (eq_nome, eq_idade, eq_desc, eq_foto, eq_login, eq_senha, eq_email, eq_funcao) VALUE ('$nome_user', '$nascimento', '$desc', '$foto', '$login', '$senha_user', '$email_user','$funcao')";
					$query['newuser'] = mysql_query($cmd['newuser']) or die(mysql_error());
					echo"<script type= \"text/javascript\">location.href=\"index.php?acao=cadastrado com sucesso\"</script>";
				}
				if($_GET['acao'] == "delete"){
					$id = $_GET['id'];
					$query['deletartuto'] = mysql_query("DELETE FROM tutoriais WHERE tuto_id = '$id'");
					header("Location: index.php?page=tutoriais");
				}
				if($_GET['acao'] == "artdelete"){
					$id_art = $_POST['excluirart'];
					$query['art_edit'] = mysql_query("DELETE FROM artigos WHERE art_id = '$id_art'");
					header("Location: index.php?page=artigos");
				}
				if($_GET['acao'] == "addart"){
					$titulo = $_POST['titulo'];
					$categoria = $_POST['categoria'];
					$desc = $_POST['desc'];
					$corpo = $_POST['corpo'];
					
					$cmd['addart'] = "INSERT INTO artigos (`art_id` ,
								`art_autor` ,
								`art_categoria` ,
								`art_desc` ,
								`art_titulo` ,
								`art_corpo`) VALUES (NULL, '$nome', '$titulo', '$categoria', '$desc', '$corpo')";
					$query['addart'] = mysql_query($cmd['addart']) or die (mysql_error());
					echo"<script type= \"text/javascript\">location.href=\"index.php?acao=cadastrado com sucesso\"</script>";
				}
?>