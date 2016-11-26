<?php
$host = "localhost";
$user = "root";
$pass = "root";
$bd = "arphost";

$conn = mysqli_connect($host,$user,$pass) or die ("O servidor não responde!");
$database = mysqli_select_db($conn,$bd) or die ("Não foi possivel conectar-se ao banco de dados!");

// Verifica a Conexão
if (!$conn) {
	die("Conexao falhou: " . mysqli_connect_error());
}
echo "<center><b><font color=green><font size=3px><img src='../assets/images/icones/db.png'> Conexão feita com sucesso!</font></b></center>";

/* Usuário e senha de testes
	login: admin
	senha: arphost
*/
?>