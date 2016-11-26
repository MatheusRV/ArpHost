<?
	session_start();
	if(empty($_SESSION['IDUSUARIO']) || !isset($_SESSION['IDUSUARIO'])){
		header("Location: ../index.php");
	}
?>