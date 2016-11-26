<?php
include ("conexao.php");

$login = mysqli_real_escape_string($conn,$_POST['login']);
$senha = mysqli_real_escape_string($conn,$_POST['senha']);

if($login == "" || !$login) {
	echo "<font color=red><b>Digite seu login!<br>Você será redirecionado em 3 segundos...</b></font>";
	header("Refresh: 3, login.php");
	exit;
} else {
	$sql = "SELECT * FROM usuarios WHERE login = '$login'";
	$consulta = mysqli_query($conn,$sql);
	$linha = mysqli_num_rows($consulta);
	if($linha != 0) {
		echo "<font color=red><b>O nome de usuario que você<br>
		Digitou já existe tente outro!<br>Você será redirecionado em 3 segundos...</b></font>";
		header("Refresh: 3, cadastro.php");
		exit;
	}
}

if($senha == "" || !$senha) {
	echo "<font color=red><b>Digite sua senha!<br>Você será redirecionado em 3 segundos...</font></b>";
	header("Refresh: 3, cadastro.php");
	exit;
}

$sql = "INSERT INTO usuarios (ID,login,senha) values ('','$login','$senha')";
$consulta = mysqli_query($conn,$sql);

if($consulta) {
	echo "<font color=green><b>
	Você foi cadastrado com sucesso!<br>
	Você será redirecionado em 5 segundos...
</font></b>";
header("Refresh: 5, login.php");
exit;
} else {
	echo "<font color=red><b>Não foi possivel efetuar o seu cadastro<br>
	tente mais tarde pode ser um problema no servidor!<br>
	Você será redirecionado para a Página Inicial em 5 segundos...</font></b>";
	header("Refresh: 5, Home.php");
	exit;
}	
mysqli_close($conn);
?>