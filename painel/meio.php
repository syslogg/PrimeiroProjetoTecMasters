<?php include("verificar.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEC MASTER - Painel Administrativo</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id= "meio">
	<div id="menu">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="index.php?page=tutoriais">TUTORIAL</a></li>
			<li><a href="index.php?page=artigos">ARTIGO</a></li>
			<li><a href="index.php?page=newuser">USUARIOS</a></li>
			<li><a href="index.php?page=cmt">COMENTARIOS</a></li>
			<li><a href="#">CONTATOS</a></li>
			<li><a href="#">DESTAQUES</a></li>
		</ul>
	</div>
	<div id ="conteudo">
<?php
	if($_GET['acao'] == "senha") {
		echo "Senha Alterada com Sucesso";
	}
	elseif($_GET['acao' == "desc"]){
		echo "Descricao Atualizada com Sucesso";
	}
	elseif($_GET['acao'] == "edituto"){
			echo "Tutorial Editado com Sucesso";
		}
	elseif($_GET['acao'] == "logout"){
		session_destroy();
		session_unset();
		echo"<script language = 'javascript'>alert('Deslogado com Sucesso')</script>";
		echo "<script language = 'javascript'>location.href = 'login.php'</script>";
		//header("Location: login.php");
		}
	else{
			//array contendo as paginas do site
		$page['home'] = "home.php";
		$page['senha'] = "senha.php";
		$page['desc'] = "desc.php";
		$page['tutoriais'] = "tutoriais.php";
		$page['newuser'] = "newuser.php";
		$page['artigos'] = "artigos.php";
		$page['addart'] = "addart.php";
		$page['cmt'] = "comentarios.php";
		
		//variavel do serve side include
		$ssi = $_GET["page"];
		
		//verifica se a variavel do serve side include estar vazia ou nao antes de verificar se o arquivo existe
		if(!empty($ssi)){
			//verifica se o arquivo existe antes de incluir
			if(file_exists($page["$ssi"])) {
				include ("$page[$ssi]");
			}
			else{
				echo "<h2>Pagina Inexistente</h2>";
			}
		}
		//verifica se a variavel do serve side include estar existente caso esteja irar exibir a pagina inicial
		if(!isset($_GET['page'])) {
			include ("home.php");
		}
	}
?>
</div>
</div>
</body>
</html>
