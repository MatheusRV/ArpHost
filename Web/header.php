<?php
if(empty($_SESSION)) 
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">  
<head>
	<meta charset="utf-8"/>
	<!-- CSS & Etc... -->
	<link rel="stylesheet" type="text/css" href="/Projeto-SIN342/Web/assets/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="/Projeto-SIN342/Web/assets/css/simplegrid.css">
	<link rel="stylesheet" type="text/css" href="/Projeto-SIN342/Web/assets/css/font-awesome.min.css">
	
	<title>ArpHost</title>
</head>
<body>
	<div class="grid grid-pad">
	    <div class="col-9-12">
	       <div class="content">
	        	<!-- Título -->
				<h1 class="logo"><a href="./">ArpHost</a></h1>
			</div>
		</div>
		<div class="col-3-12">
			<div class="content">
				<nav>
					Olá,
					<?php 
						if(isset($_SESSION['login'])){
							echo $_SESSION['login'];
						}else{
							echo "Visitante";
						}
					?>
					<?php 
						if(isset($_SESSION['login'])){
					?>
							<a href="logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</div>
	</div>
	<div class="grid grid-pad">
	    <div class="col-10-12">
	       <div class="content">
				<!-- Menu -->
				<nav>
					<a href="/Projeto-SIN342/Web/index.php">Página Inicial</a>
					<a href="/Projeto-SIN342/Web/about-us.php">Quem Somos</a>
					<?php 
						if(isset($_SESSION['login'])){
					?>
							<a href="/Projeto-SIN342/Web/act/logout.php">Meu Dashboard</a>
					<?php
						}else{
					?>
							<a href="/Projeto-SIN342/Web/login.php">Ir para o Painel</a>
					<?php
						}
					?>
					<a href="/Projeto-SIN342/Web/talk-to-us.php">Fale Conosco</a>
				</nav>
	       </div>
	    </div>
	    <div class="col-2-12">
	       <div class="content">
				<!-- Shopping Menu -->
				<nav>
					<a href="./cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php if(!isset($_COOKIE[$cart_count_cookie])){ print '0';} else {print $_COOKIE[$cart_count_cookie];}?> Itens</a>
				</nav>
	       </div>
	    </div>
	</div>