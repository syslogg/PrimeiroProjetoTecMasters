<?php
$host 	 = "localhost";
$usuario = "root";
$senha   = "";
$banco   = "tecmaster";

$conexao = mysql_connect($host,$usuario,$senha) or die ("Nao Foi possivel conectar com servidor");
$db	 = mysql_select_db("$banco",$conexao) or die ("Nao foi possivel selecionar o banco de dados");

?>