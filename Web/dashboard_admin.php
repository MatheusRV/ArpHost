<?php
if(empty($_SESSION)) 
	session_start();

?>
<!DOCTYPE html>
<html>  
<head>
	<meta charset="utf-8"/>
	<!-- CSS & Etc... -->
	<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="assets/css/headereffect.css">
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="assets/images/favicon/icebolt-152-201478.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/images/favicon/icebolt-152-201478.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon/icebolt-144-201478.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/images/favicon/icebolt-120-201478.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon/icebolt-114-201478.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon/icebolt-72-201478.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/images/favicon/icebolt-57-201478.png">
	<link rel="icon" sizes="32x32" href="assets/images/favicon/icebolt-32-201478.png">
	<title>ArpHost | Admin Panel</title>    
</head>
<body>
	<header>
		<div id="saudacoes"></div>
		<img id="icone" align="center">
		<!-- Título -->
		<h1 class="header-text">ArpHost</h1>
		<!-- Menu -->
		<nav align="middle" class="menu">
			<a href="dashboard_admin.php" class="btn">Página Inicial </a>
			<a href="clientes.php" class="btn">Clientes </a>
			<a href="produto.php" class="btn">Produtos </a>
            <a href="#" class="btn">Vendas </a>
			<a href="logout.php" class="btn">Logout </a>
		</nav>
	</header>
	<div id="container">
		<div id="conteudo">
			<div align="center"><br><br><br><br><br>
				<a href="dashboard_admin.php">
					<img src="assets/images/admin/admin.png" align="center"/></a>
				</div>
			</div>
		</body>
		<script src="assets/js/main.js"></script>
		</html>