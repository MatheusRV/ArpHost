<?php
if(empty($_SESSION)) 
  session_start();

?>
<!DOCTYPE html>
<html>  
<head>
 <meta charset="utf-8"/>
 <!-- CSS & Etc... -->
 <link rel="stylesheet" href="assets/css/login.css">
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
  <!-- Register Form -->
  <div class="igor-column column">
    <div class="register-page">
      <div class="form">
        <h3>Cadastro de Usuário <img src="assets/images/icones/signup.png"/></h3>
        <form class="login-form" method="post" action="processa_registro.php" enctype="multipart/form-data">
          <input type="text" name="login" id="login" placeholder="Nome de Usuário" required autofocus/>
          <input type="password" name="senha" id="senha" placeholder="Senha" required autofocus/>
          <button name="entrar" type="submit" id="cadastrar" value="Cadastrar">Cadastrar</button>
          <p class="message">Já tem conta? <a href="login.php">Entre aqui</a></p>
        </form>
      </div>
    </div>
  </div>   
</body>
<script src="assets/js/main.js"></script>
</html>