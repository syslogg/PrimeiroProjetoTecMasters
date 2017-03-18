<?php
	include("verificar.php");
	
	$quantidade = 10;
	$pagina = (isset($_GET['pagina'])) ? (int) $_GET['pagina'] : 1;
	$calculo = ($quantidade * $pagina) - $quantidade;
	$sqltotal = mysql_query("SELECT tuto_cmt_id FROM tuto_cmt");
	$numtotal = mysql_num_rows($sqltotal);
	$totalpage = ceil($numtotal /$quantidade);
	
	$query['tutocmt'] = mysql_query("SELECT * FROM tuto_cmt ORDER BY tuto_cmt_id DESC LIMIT $calculo, $quantidade ") or die (mysql_error());
	$query['artcmt'] = mysql_query("SELECT * FROM art_cmt ORDER BY cmt_art_id DESC ") or die (mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEC MASTER - Painel Administrativo</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="cmttuto">
	<h1>Tutoriais</h1>
	<table width="100%" border="0">
  <tr>
    <td>Nome</td>
    <td>Email</td>
    <td>Site/Blog</td>
    <td>Tutorial</td>
  </tr>
<?php 
	while($cmt_tuto = mysql_fetch_array($query['tutocmt'])){ ?>
  <tr>
    <td><?php echo $cmt_tuto['tuto_cmt_nome']; ?></td>
    <td><?php echo $cmt_tuto['tuto_cmt_email']; ?></td>
    <td><?php echo $cmt_tuto['tuto_cmt_site']; ?></td>
    <td><a href="../index.php?page=tutorial&tuto=<?php echo $cmt_tuto['tuto_id'];?>"><?php echo $cmt_tuto['tuto_titulo'];?></a></td>
  </tr>
	<?php } ?>
	</table>
	<?php 
   if($totalpage != 1){
		echo '<a href="?page=cmt&pagina=1">Primeira Pagina</a> - ';
   //loop para mostra a os links da paginao
   for($i = 1; $i <= $totalpage; $i++){
       if($i == $pagina)
    echo $i;
      else
    echo " <a href=\"?page=cmt&pagina=$i\">$i</a> ";
   }
   //link para ultima pgina
   echo " - <a href=\"?page=cmt&pagina=$totalpage\">Ultima Pgina</a>";
   }
 ?>
</div>
<hr>
<div id="cmtart">
<h1>Artigos</h1>
	<table width="100%" border="0">
  <tr>
    <td>Nome</td>
    <td>Email</td>
    <td>Site/Blog</td>
    <td>Artigo</td>
  </tr>
<?php 
	while($cmt_art = mysql_fetch_array($query['artcmt'])){ ?>
  <tr>
    <td><?php echo $cmt_art['cmt_art_nome']; ?></td>
    <td><?php echo $cmt_art['cmt_art_email']; ?></td>
    <td><?php echo $cmt_art['cmt_art_site']; ?></td>
    <td><a href="../index.php?page=tutorial&art=<?php echo $cmt_art['art_id'];?>"><?php echo $cmt_art['art_titulo'];?></a></td>
  </tr>
	<?php } ?>
	</table>
</div>
</body>
</html>