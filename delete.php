<?php

$connect = mysql_connect('localhost','admin','admin');
$db = mysql_select_db('teste_php');
$id = $_GET["id"];

mysql_query("DELETE FROM sintegra WHERE id='".$id."'"); 

mysql_close($connect); 

echo "Registro excluído com sucesso!";
?>