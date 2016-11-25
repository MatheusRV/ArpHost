<?php
$host = "localhost";
$user = "admin";
$pass = "arphost2016";
$bd = "arphost";

$conn = mysqli_connect($host,$user,$pass) or die ("O servidor não responde!");
$database = mysqli_select_db($conn,$bd) or die ("Não foi possivel conectar-se ao banco de dados!");

// Check connection
if (!$conn) {
	die("Conexao falhou: " . mysqli_connect_error());
}
echo "<b><center><font color=green><font size=3px><img src='assets/images/icones/db.png'> Conexão feita com sucesso!</font></b><br></center>";

/* Login Admin
	login: admin
	senha: arphost
*/


	?>