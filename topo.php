<?php
	include("conexao/conexao.php");
	
	if($_GET['acao']== "enquete") {
		$registrar_enq = mysql_query("INSERT INTO enquete (enq_voto) value ('$_POST[enq]')") or die(mysql_error());
	}

	//array com comandos sql
	$cmdsql['parceiro'] = "SELECT * FROM parceiros WHERE parc_status = '1' ORDER BY parc_id DESC LIMIT 20";
	$cmdsql['noticia'] = "SELECT * FROM noticias ORDER BY not_id DESC LIMIT 10";
	$cmdsql['enquete1'] = "SELECT * FROM enquete WHERE enq_voto =  '1'";
	$cmdsql['enquete2'] = "SELECT * FROM enquete WHERE enq_voto =  '2'";
	$cmdsql['enquete3'] = "SELECT * FROM enquete WHERE enq_voto =  '3'";
	$cmdsql['enquete4'] = "SELECT * FROM enquete WHERE enq_voto =  '4'";
	$cmdsql['enquete'] = "INSERT INTO enquete (null, enq_voto) VALUE ($enquete)";
	
	//array com as consultas no banco
	$query['parceiro'] = mysql_query($cmdsql['parceiro']) or die (mysql_error());
	$query['noticia'] = mysql_query($cmdsql['noticia']) or die (mysql_error());
	$query['enquete1'] = mysql_query($cmdsql['enquete1']) or die (mysql_error());
	$query['enquete2'] = mysql_query($cmdsql['enquete2']) or die (mysql_error());
	$query['enquete3'] = mysql_query($cmdsql['enquete3']) or die (mysql_error());
	$query['enquete4'] = mysql_query($cmdsql['enquete4']) or die (mysql_error());
	
	//array q conta dados da consulta
	$contar['enquete1'] = mysql_num_rows($query['enquete1'] );
	$contar['enquete2'] = mysql_num_rows($query['enquete2'] );
	$contar['enquete3'] = mysql_num_rows($query['enquete3'] );
	$contar['enquete4'] = mysql_num_rows($query['enquete4'] );
	
	//contando resultado final da enquete
	$resultadofinal = $contar['enquete1']+$contar['enquete2']+$contar['enquete3']+$contar['enquete4']
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/destaque.css" type="text/css" /> 
<link rel="stylesheet" href="css/menu.css" type="text/css" /> 
<link rel="stylesheet" href="css/menuie6.css" type="text/css" /> 
<script src="js/DD_belatedPNG_0.0.7a.js" type="text/javascript"></script> 
<script type="text/javascript"> 
DD_belatedPNG.fix('img'); 
</script>  
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="js/jquery.destaques.js"></script>
</head>

<body>
<div id="topo">
	<div id="menutop">
		<ul id="menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">Parceiros</a>
				<ul>
					<?php
						while($parceiro = mysql_fetch_array($query['parceiro'])) { // repetindo os parceiros
					?>
					<li><a href="<?php echo $parceiro['parc_link']?>"><?php echo $parceiro['parc_titulo']?></a></li>
					<?php } //fim do laco de repeticao ?>
				</ul>
			</li>
			<li><a href="#">Tutoriais</a></li>
			<li><a href="#">Artigos</a></li>
			<li><a href="#">Noticias</a></li>
			<li><a href="#">Equipe</a></li>
			<li><a href="#">Contato</a></li>
		</ul>
	
	</div>
    <div id="conteudo">
    	<h3><img src="imgs/logo.png" alt="logo-tipo"/></h3>
        <div id="bloco2">			<form action="?page=pesquisa&pesquisa=<?php echo $_GET["pesquisa"]; ?>" method="get" >
				<h1>Pesquise</h1>
				<input type="text" name="pesquisar" />
				<br />
				<input type="submit" value="pesquisar" />
			</form><br />
			<h1>Ultimas Noticias</h1>
			<div  id="noticias">
				<ul>
				<?php while($noticia = mysql_fetch_array($query['noticia'])) { //laco de repeticao da noticia?>
					<li><a href="?page=noticia&noticia=<?php echo $noticia['not_id']; ?>">  <?php echo $noticia['not_titulo']; ?></a></li>
					<?php } //fim do laco ?>
			</ul>
			</div>
		</div >
		
			<div id="enquete">
			<h2>Oque Voce Achou do Site?</h2><br/>
				<form action="?acao=enquete<?php if (isset($_GET["page"])) {echo "&page=".$_GET["page"];}?>" method="post">
					<label><input type="radio" name="enq" value="1" ckecked>Bom</label><br/>
					<label><input type="radio" name="enq" value="2">Legal</label><br/>
					<label><input type="radio" name="enq" value="3">Precisa Melhorar</label><br/>
					<label><input type="radio" name="enq" value="4">Ruim</label><br/>
					<input type="submit" value="Votar">
				</form>
				<b>Resultado Parcial:</b><br/>
				Bom <?php  echo $contar['enquete1'];//resultado parcial da enquete?><br/>
				Legal <?php echo $contar['enquete2'];?><br/>
				Precisa Melhorar <?php echo $contar['enquete3'];?><br/>
				Ruim <?php echo $contar['enquete4'];?><br/><br/>
				
				Total de Votos <?php echo$resultadofinal; ?>
			</div>

    </div>
</div>
</body>
</html>