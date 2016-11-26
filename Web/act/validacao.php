<?php
include "conexao.php";

if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
	header("Location: login.php"); exit;
}

$login = mysql_real_escape_string($_POST['usuario']);
$senha = mysql_real_escape_string($_POST['senha']);

// Validação do usuário/senha digitados
$sql = "SELECT 'login','senha' FROM 'usuarios' WHERE ('login' = '". $login ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
$query = mysql_query($sql);
if (mysql_num_rows($query) != 1) {
  // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	echo "Login inválido!"; exit;
} else {
  // Salva os dados encontados na variável $resultado
	$resultado = mysql_fetch_assoc($query);
}



?>