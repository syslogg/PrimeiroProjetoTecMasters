<?php include ("verificar.php");

	$id_edit = $_GET['edit'];
	$pesquisa = $_POST['pesquisar'];
	
	$quantidade = 10;
	$pagina = (isset($_GET['pagina'])) ? (int) $_GET['pagina'] : 1;
	$calculo = ($quantidade * $pagina) - $quantidade;
	if(empty($pesquisa)){
		$query['admtuto'] = mysql_query("SELECT * FROM tutoriais ORDER BY tuto_id DESC LIMIT $calculo, $quantidade ");
	}
	else{
		$query['admtuto'] = mysql_query("SELECT * FROM tutoriais tuto_titulo LIKE \"%Patrick%\" ORDER BY tuto_id DESC LIMIT $calculo, $quantidade ") or die (mysql_error());
	}

	$sqltotal = mysql_query("SELECT tuto_id FROM tutoriais");
	$numtotal = mysql_num_rows($sqltotal);
	$totalpage = ceil($numtotal /$quantidade);
	
	if($_GET['page'] == "tutoriais" && $_GET['acao'] == "edit"){
			$query['editar'] = mysql_query("SELECT * FROM tutoriais WHERE tuto_id = '$id_edit'");
			while($tutorial = mysql_fetch_array()){
					$titulo = $tutorial['tuto_titulo'];
					$desc = $tutorial['tuto_desc'];
					$corpo = $tutorial['tuto_corpo'];
				}
				
	}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEC MASTER - Painel Administrativo</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php if(!isset($_GET['acao'])){ ?>
	<form action="" method="post">
		<input type="text" name="pesquisar">
		<input type = "submit" value = "Pesquisar!">
	</form>
<table width="100%" border="0" align="center">
  <tr>
    <th width="28%" bgcolor="#99FFFF">Titulo</th>
    <th width="31%" bgcolor="#99FFFF">Autor</th>
    <th width="24%" bgcolor="#99FFFF">Categoria</th>
    <th colspan="2" bgcolor="#99FFFF">Administrar</th>
  </tr>
	<?php while ($linha = mysql_fetch_array($query['admtuto'])){ ?>
  <tr>
    <td height="20"><?php echo $linha['tuto_titulo']; ?></td>
    <td><?php echo $linha['tuto_autor']; ?></td>
    <td><?php echo $linha['tuto_categoria']; ?></td>
    <td width="9%" align="center">
      <form id="form1" name="form1" method="post" action="?page=tutoriais&acao=edit">
          <input type="button" name="edit" id="button" value="Editar" onclick="window.location.href ='?page=tutoriais&acao=edit&id=<?php  echo $linha['tuto_id']; ?>';"/>
      </form></td>
    <td width="8%" align="center"><a href="acao.php?acao=delete&id=<?php echo $linha['tuto_id']; ?>">Excluir</a></td>
  </tr>
  <?php } ?>
</table>
<?php 
   if($totalpage != 1){
		echo '<a href="?page=tutoriais&pagina=1">Primeira Pagina</a> - ';
   //loop para mostra a os links da paginao
   for($i = 1; $i <= $totalpage; $i++){
       if($i == $pagina)
    echo $i;
      else
    echo " <a href=\"?page=tutoriais&pagina=$i\">$i</a> ";
   }
   //link para ultima pgina
   echo " - <a href=\"?page=tutoriais&pagina=$totalpage\">Ultima Pgina</a>";
   }
 ?>
 <?php } ?>
 <?php
 	if(isset($_GET['acao']) and $_GET['page'] = "tutoriais" and $_GET['acao'] = "edit"){ ?>
		    <form id="form2" name="form2" method="post" action="acao.php?acao=edituto&id=<?php echo $_GET['id']; ?>">
  <table width="414" border="0" align="center">
    <tr>
      <td width="95">Titulo:</td>
      <td width="309"><input type="text" name="title" id="title"  value="<?php echo $titulo; ?>"/></td>
    </tr>
    <tr>
      <td>Descricao</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <textarea name="desc" id="desc" cols="45" rows="5"><?php echo $desc; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Corpo:</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><textarea name="corpo" id="corpo" cols="45" rows="5"><?php echo $corpo; ?></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button2" id="button2" value="Editar" /></td>
    </tr>
  </table>
</form>
<?php } ?>
</body>
</html>