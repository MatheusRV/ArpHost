<?
	session_start();
	if(empty($_SESSION['IDUSUARIO']) || !isset($_SESSION['IDUSUARIO'])){
		header("Location: ../index.php?action=retricted&vs=ok");
		?>
		<script type="text/javascript">
			location.href = "../index.php?action=restricted&vs=ok";
		</script>
		<?
	}
?>