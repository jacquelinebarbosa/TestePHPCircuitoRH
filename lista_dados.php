<html>
<head>
<title> Lista Dados </title>
</head>
<body>
<?php
$connect = mysql_connect('localhost','admin','admin');
$db = mysql_select_db('teste_php');
$sql = mysql_query("Select * From sintegra");
echo "<table>"; 
echo  "<tr><td>CNPJ:</td>";
while($exibe = mysql_fetch_assoc($sql)){
echo "<td>".$exibe["cnpj"]."</td>";
echo "<td><a href='deletar.php?id=" echo $exibe["id"] ">Delete</a></td></tr>";
}
?>
	
</body>
</html>