<?php include('verificar.php');
	$query['desc'] = mysql_query("SELECT * FROM equipe WHERE eq_id = '$id'");
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEC MASTER - Painel Administrativo</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form id="form1" name="form1" method="post" action="acao.php?acao=desc">
  <table width="429" border="0" align="center">
    <tr>
      <td width="90" align="right">Sobre Voce:</td>
      <td width="329"><label>
        <textarea name="desc" id="desc" cols="45" rows="5"><?php while($desc = mysql_fetch_array($query['desc'])){ echo $desc['eq_desc']; } ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>