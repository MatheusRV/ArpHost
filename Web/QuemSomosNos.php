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
	<link rel="stylesheet" href="assets/css/aboutus.css">
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

	<title>ArpHost</title>    
</head>
<body>
	<header>
		<div id="saudacoes"></div>
		<img id="icone" align="center">
		<div id=status>
			Bem Vindo(a), <?php if(isset($_SESSION['login'])){
				echo $_SESSION['login'];
			}else{
				echo "Visitante";
			} ?>
			<?php if(isset($_SESSION['login'])){
				?><a href="logout.php">
				<input type="button" value="Sair" />
			</a><?php }?></div>
			<!-- Título -->
			<h1 class="header-text">ArpHost</h1>
			<!-- Menu -->
			<nav align="middle" class="menu">
				<a href="index.php" class="btn">Página Inicial </a>
                <a href="produtos.php" class="btn">Produtos </a>
				<a href="carrinho.php" class="btn">Carrinho </a>
				<a href="login.php" class="btn">Login </a>
				<a href="QuemSomosNos.php" class="btn">Quem somos nós </a>
				<a href="Contato.php" class="btn">Contato</a>
			</nav>
		</header>
		<br><br>

		<!-- Profiles -->
		<figure class="profile-card">
			<div class="profile-image"><img src="assets/images/aboutus/igor.jpg" alt="Igor-Foto-Perfil" /></div>
			<figcaption>
				<h3>Igor Alves</h3>
				<h4>Fundador &amp; Desenvolvedor Web</h4>
				<p>Matrícula: 3902</p>
				<p>E-mail: igor.lucio@ufv.br</p>
				<p><a target="_blank" href="https://github.com/iguit0">GitHub</a> / <a target="_blank" href="https://twitter.com/iguit0">Twitter</a></p>
			</figcaption>
		</figure>
		<figure class="profile-card">
			<div class="profile-image"><img src="assets/images/aboutus/Mateus-Perfil.jpg" alt="Mateus-Foto-Perfil" /></div>
			<figcaption>
				<h3>Mateus Lopes</h3>
				<h4>Co-Fundador &amp; Desenvolvedor Web</h4>
				<p>Matrícula: 3897</p>
				<p>E-mail: mateus.l.castro@ufv.br</p>
			</figcaption>
		</figure>
		<figure class="profile-card">
			<div class="profile-image"><img src="assets/images/aboutus/Matheus-Perfil.jpg" alt="Matheus-Foto-Perfil" /></div>
			<figcaption>
				<h3>Matheus Vieira</h3>
				<h4>Co-Fundador &amp; Desenvolvedor Web</h4>
				<p>Matrícula: 3929</p>
				<p>E-mail: matheus.breguez@ufv.br</p>
			</figcaption>
		</figure>
	</body>
	<script src="assets/js/main.js"></script>
	</html>