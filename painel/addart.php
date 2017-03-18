<?php include("verificar.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEC MASTER - Painel Administrativo</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form id="form1" name="form1" method="post" action="acao.php?acao=addart">
  <table width="535" border="0" align="center">
    <tr>
      <td width="95">Titulo:</td>
      <td width="430"><input name="titulo" type="text" size="50" /></td>
    </tr>
    <tr>
      <td>Categoria:</td>
      <td><select name="categoria">
        <option value="php">PHP</option>
        <option value="flash">flash</option>
        <option value="dw">dreamweaver</option>
        <option value="fw">fireworks</option>
        <option value="ai">illustrato</option>
        <option value="id">indesign</option>
        <option value="corel">corel</option>
        <option value="ps">photoshop</option>
        <option value="ae">after effects</option>
        <option value="vb">visual basic</option>
        <option value="wordpress">wordpress</option>
        <option value="joomla">joomla</option>
        <option value="premiere">premiere</option>
        <option value="tableless">tableless</option>
        <option value="vegas">vegas</option>
        <option value="3d studio max">3d studio max</option>
        <option value="javascript">javascript</option>
      </select></td>
    </tr>
    <tr>
      <td>Descricao:</td>
      <td><textarea name="desc" cols="50" rows="5" ></textarea></td>
    </tr>
    <tr>
      <td>Corpo</td>
      <td><textarea name="corpo" cols="50" rows="10" ></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" value="Postar!" /></td>
    </tr>
  </table>
</form>
</body>
</html>