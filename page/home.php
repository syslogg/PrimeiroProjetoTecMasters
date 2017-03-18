<?php 
	include("conexao/conexao.php"); 
	
	//array contendo comandos sql
	$cmdsql['tutoriais'] = "SELECT * FROM tutoriais LIMIT 5";
	$cmdsql['artigos'] = "SELECT * FROM artigos LIMIT 5";
	$cmdsql['destaques'] = "SELECT * FROM destaques WHERE dq_status = '1' LIMIT 5";
	
	//consultas
	$query['tutoriais'] = mysql_query($cmdsql['tutoriais']) or die ("nao deu");
	$query['artigos'] = mysql_query($cmdsql['artigos']) or die (mysql_error());
	$query['destaques'] = mysql_query($cmdsql['destaques']) or die (mysql_error());
	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#tabela tr th {
	border-bottom:3px solid #000;
}
-->
</style>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="css/destaque.css" type="text/css" /> 
<script src="js/DD_belatedPNG_0.0.7a.js" type="text/javascript"></script> 
<script type="text/javascript"> 
DD_belatedPNG.fix('img'); 
</script>  
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.destaques.js"></script>
</head>

<body>
<div id="meio">
	<div id="cima">
		<div id="ul-tutoriais">
		<img src="imgs/u.gif">ltimos <img src="imgs/t.gif">utorias<br><br>
		<table width="457" border="0" cellpadding="0" cellspacing="0" id="tabela">
		<tr>
						<th width="160" align="left">Titulo:</td>
						<th width="50"align="center">Categoria:</td>
						<th width="100" align="right">Autor:</td>
		</tr>
		<?php while ($tutoriais = mysql_fetch_array($query['tutoriais'])) { ?>
			  <tr>
				<td width="160" align="left"><a href="?page=tutorial&tuto=<?php echo $tutoriais['tuto_id']; ?>"><?php echo $tutoriais['tuto_titulo']; ?></a></td>
				<td width="50"align="center"><?php echo $tutoriais['tuto_categoria']; ?></td>
				<td width="100" align="right"><?php echo $tutoriais['tuto_autor']; ?></td>
			  </tr>
		<?php } ?>
		</table>
		</div>
		<div id="ul-artigos">
		<img src="imgs/u.gif">ltimos <img src="imgs/a.gif">rtigos<br><br>
		<table width="457" border="0" cellpadding="0" cellspacing="0" id="tabela">
				<tr>
						<th width="160" align="left">Titulo:</td>
						<th width="50"align="center">Categoria:</td>
						<th width="100" align="right">Autor:</td>
				  </tr>
			<?php while($artigos = mysql_fetch_array($query['artigos'])) { ?>
				  <tr>
						<td width="160" align="left"><a href="?page=artigo&artigo=<?php echo $artigos['art_id']; ?>"><?php echo $artigos['art_titulo']; ?></a></td>
						<td width="50"align="center"><?php echo $artigos['art_categoria']; ?></td>
						<td width="100" align="right"><?php echo $artigos['art_autor']; ?></td>
				  </tr>
			<?php } ?>
			</table>
		</div>
	</div>
	<div="baixo">
		<div id="destaques">
		<img src="imgs/d.gif">estaques
		
			

		</div>
		<div id="equipe">
		<img src="imgs/e.gif">quipe
		</div>
	</div>
</div>
</body>
</html>