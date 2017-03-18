<?php 
	include("verificaradm.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="acao.php?acao=newuser" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="0" align="center">
    <tr>
      <td width="75" align="right">Nome:</td>
      <td width="115"><input name="nome_user" type="text" id="nome_user" size="50" /></td>
    </tr>
    <tr>
      <td align="right">Nascimento:</td>
      <td><input name="nascimento" type="text" id="nascimento" size="15" /></td>
    </tr>
    <tr>
      <td align="right">Login:</td>
      <td><input name="login" type="text" id="login" size="30" /></td>
    </tr>
    <tr>
      <td align="right">Senha:</td>
      <td><input name="senha_user" type="password" id="senha_user" size="30" /></td>
    </tr>
    <tr>
      <td align="right">Email:</td>
      <td><input name="email" type="text" id="email" size="50" /></td>
    </tr>
    <tr>
      <td align="right">Foto:</td>
      <td><input type="text" name="foto" id="foto" /></td>
    </tr>
    <tr>
      <td align="right">Descricao:</td>
      <td><textarea name="desc" cols="100" rows="20" id="desc"></textarea></td>
    </tr>
    <tr>
      <td align="right">Funcao:</td>
      <td><select name="funcao" id="select">
        <option value="adm">Administrador</option>
        <option value="esc">Colunista/Web</option>
      </select></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Cadastrar" /></td>
    </tr>
  </table>
</form>
</body>
</html>