<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEC MASTER - Artigos e Tutoriais</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<?php
	//array contendo as paginas do site
	$page['home'] = "page/home.php";
	$page['tutoriais'] = "page/tutorial.php";
	$page['artigos'] = "page/artigos.php";
	$page['noticias'] = "page/noticias.php";
	$page['equipe'] = "page/equipe.php";
	$page['contatos'] = "page/contato.php";
	$page['pesquisa'] = "page/search.php";
	$page['noticia'] = "page/noticia.php";
	$page['enquete'] = "page/enquete.php";
	$page['tutorial'] = "page/viewtuto.php";
	
	//variavel do serve side include
	$ssi = $_GET["page"];
	
	//verifica se a variavel do serve side include estar vazia ou nao antes de verificar se o arquivo existe
	if(!empty($ssi)){
		//verifica se o arquivo existe antes de incluir
		if(file_exists($page["$ssi"])) {
			include ("$page[$ssi]");
		}
		else{
			echo "<h1>Pagina Inexistente, Por Favor Navege em Nosso Site Corretamente</h1>";
		}
	}
	//verifica se a variavel do serve side include estar existente caso esteja irar exibir a pagina inicial
	if(!isset($_GET['page'])) {
		include ("page/home.php");
	}
?>

</body>
</html>
