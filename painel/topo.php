<?php include('verificar.php');
	$cmd['aviso'] = "SELECT * FROM aviso WHERE av_status = '1' ORDER BY av_id DESC LIMIT 5";

	$query['aviso'] = mysql_query($cmd['aviso']) or die (mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEC MASTER - Painel Administrativo</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id = "topo">
	<h2><img src="img/top.png"></h2>
	<h1><img src="img/logo.png"></h1>
	<div id = "barrinha">Ola,  <?php echo $nome; ?></div>
	<div id="acc">
		<ul>
			<li><a href="index.php?page=senha">Mudar Senha</a></li>
			<li><a href="#">Mudar Descricao</a></li>
			<li><a href="#">Mudar Email</a></li>
			<li><a href="logout.php">Sair</a></li>
		</ul>
	</div>
	<div id="aviso"><marquee scrollamount="10" onMouseOver="stop();" onMouseOut="start();"> 
		<?php  while($aviso = mysql_fetch_array($query['aviso'])) { ?>
			<?php echo $aviso['av_nome']; ?> | <?php echo $aviso['av_aviso']; ?>
		<?php } ?>
				
	</marquee>
	</div>
</div>
</body>
</html>
