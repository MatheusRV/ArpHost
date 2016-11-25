<?php
include ("conexao.php");

if(isset($_POST['login'])){
	$login = mysqli_real_escape_string($conn,$_POST['login']);
	$senha = mysqli_real_escape_string($conn,$_POST['senha']);

	$sql = ("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");
	$consulta = mysqli_query($conn,$sql) or die("erro ao selecionar");
	$campos = mysqli_num_rows($consulta);

	if ($campos == 0){
		echo "<font color=red><b>
		Usuario e/ou Senha Incorretos!<br>Você será redirecionado em 3 segundos...
	</font></b>";
	header("Refresh: 3, login.php");
}
$sql = ("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");
$consulta = mysqli_query($conn,$sql) or die("erro ao selecionar");
$campos = mysqli_num_rows($consulta);
if($campos > 0){
	if($login == "admin" and $senha == "arphost"){
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;	
		echo "<font color=blue><b>
		Sr. Admin logado com sucesso!<br>Você será redirecionado em 3 segundos...
	</font></b>";
	header("Refresh: 3, dashboard_admin.php");
}else {
	// Salva os dados encontados na variável $resultado
	$resultado = mysqli_fetch_assoc($consulta);
	 // Se a sessão não existir, inicia uma
	if (!isset($_SESSION)) session_start();
	
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	echo "<font color=green><b>
	Logado com sucesso!<br>Você será redirecionado em 3 segundos...
</font></b>";
header("Refresh: 3, index.php");
}
}
}
mysqli_close($conn);

?>