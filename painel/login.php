<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEC MASTER - Painel Administrativo</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="topo">
	<h1><img src="img/logo.png"></h1>
	<h2><img src="img/logo2.gif"><h2>
</div>
<div id="login">
	<form method="post" action="autenticar.php">
  <table width="221" border="0" align="center">
    <tr>
      <td width="75" align="right"><label>Login:</td>
      <td width="136">
        <input type="text" name="login" id="" />
      </label></td>
    </tr>
    <tr>
      <td align="right"><label>Senha:</td>
      <td><input type="password" name="senha" id="senha" /> </label></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Login" />
      </label></td>
    </tr>
  </table>
</form>
<?php 
	if($_GET['autenticar'] == "logar") {
		echo "<strong>Por Favor, Loge-se Antes de Entrar</strong>";
	}
?>
</div>
</body>
</html>
