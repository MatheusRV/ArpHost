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
	<link rel="stylesheet" href="assets/css/preco.css">
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
		<div id=status><br>
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
		<div class="container">
		<div class="promos"> 
			<div class="promo">
				<div class="deal">
					<span>Plano Premium</span>
					<span>Compre por</span>
				</div>
				<span class="price">R$89</span>
				<ul class="features">
					<li>Extensão final .com .org</li>
					<li>Transferência é gratuita</li>
					<li>E muito mais...</li>   
				</ul>
				<button>Adicionar ao carrinho</button>
			</div>
			<div class="promo scale">
				<div class="deal">
					<span>Plano Gold</span>
					<span>Compre por</span>
				</div>
				<span class="price">R$79</span>
				<ul class="features">
					<li>Extensão final .net .info</li>
					<li>A transferência é gratuita</li>
					<li>E muito mais...</li>   
				</ul>
				<button>Adicionar ao carrinho</button>
			</div>
			<div class="promo">
				<div class="deal">
					<span>Plano Basic</span>
					<span>Compre por</span>
				</div>
				<span class="price">R$69</span>
				<ul class="features">
					<li>Transferência de R$45</li>
					<li>Extensão final .biz .name</li>
					<li>E muito mais...</li>
				</ul>
				<button>Adicionar ao carrinho</button>
			</div>
		</div>
    </div>
	</body>
	<script src="assets/js/main.js"></script>
	</html>