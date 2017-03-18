<?php
	include("conexao/conexao.php");
	//variaveis
	$id = $_GET['tuto'];
	
	//comandos sql
	$cmdsql['tutoriais'] = "SELECT * FROM tutoriais WHERE tuto_id = '$id'";
	$cmdsql['comentarios'] = "SELECT * FROM tuto_cmt WHERE tuto_id = '$id'";
	
	//consultas
	$query['tutoriais'] = mysql_query($cmdsql['tutoriais']) or die (mysql_error());
	$query['comentarios'] = mysql_query($cmdsql['comentarios']) or die (mysql_error());
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/destaque.css" type="text/css" /> 
<script src="js/DD_belatedPNG_0.0.7a.js" type="text/javascript"></script> 
<script type="text/javascript"> 
DD_belatedPNG.fix('img'); 
</script>  
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="js/jquery.destaques.js"></script>
</head>

<body>
<?php
	while($tutorial = mysql_fetch_array($query['tutoriais'])) {
	echo  "Autor:  ".$tutorial['tuto_autor'];
	echo "<br/>";
	echo  "Categoria: ".$tutorial['tuto_categoria'];
	echo "<br/>";
	echo  "Titulo: ".$tutorial['tuto_titulo'];
	echo "<br/>";
	echo  "Descricao: ".$tutorial['tuto_desc'];
	echo "<br/>";
	echo  "corpo: ".$tutorial['tuto_corpo'];
	
	}
	
	echo  "<br><br><br><br>";

?>


</body>
</html>