<?php 
	include('verificar.php'); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEC MASTER - Painel Administrativo</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form id="form1" name="form1" method="post" action="acao.php?acao=senha" onSubmit = alert("Senha Alterada com Sucesso");>
  <table width="362" border="0" align="center">
    <tr>
      <td width="155" align="right">Nova Senha:</td>
      <td width="197"><label>
        <input type="password" name="sn_nova" id="sn_antiga" />
      </label></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Mudar Senha" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>