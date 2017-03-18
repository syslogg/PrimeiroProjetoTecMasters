<?php include("verificar.php");
	if($funcao != "adm"){
		$cmd['artigos'] = mysql_query("SELECT * FROM artigos WHERE art_autor = '$nome'");
	}
	else{
		$cmd['artigos'] = mysql_query("SELECT * FROM artigos");
	}
	if($funcao != "adm"){
		$cmd['artigos2'] = mysql_query("SELECT * FROM artigos WHERE art_autor = '$nome'");
	}
	else{
		$cmd['artigos2'] = mysql_query("SELECT * FROM artigos");
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
<form action="acao.php?acao=artdelete" method="post">
<h1>Apagar Artigos</h1>
<select name="excluirart">
	<?php while($artigos2 = mysql_fetch_assoc($cmd['artigos2'])){ ?>
    <option value="<?php echo $artigos2['art_id']; ?>" selected="selected"><?php echo $artigos2['art_titulo']; ?></option>
	<?php } ?>
</select>
	<input type="submit" value = "Apagar!"><br><br>
	Criar Novo Artigo
</form>
</body>
</html>