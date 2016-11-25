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
	<title>ArpHost | Produto</title>    
</head>
<body>
    <header>
        <div id="saudacoes"></div>
		<img id="icone" align="center">
        <!-- Título -->
		<h1 class="header-text">ArpHost</h1>
		<!-- Menu -->
		<nav align="middle" class="menu">
			<a href="produto.php" class="btn">Página Inicial </a>
			<a href="inserir_produto.php" class="btn">Inserir Produto </a>
			<a href="listar_produto.php" class="btn">Listar Produto </a>
			<a href="#" class="btn">Editar Produto </a>
			<a href="remover_produtos.php" class="btn">Remover Produto </a>
			<a href="dashboard_admin.php" class="btn">Voltar para Painel</a>
		</nav>
	</header>
    <br>
	<form action="inserir_produto.php" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="orange">

			<tr align="center">
				<td colspan="7"><h2>Inserir novo Produto</h2></td>
			</tr>

			<tr>
				<td align="right"><b>Nome:</b></td>
				<td><input type="text" name="produto_nome" required/></td>
			</tr>

			<tr>
				<td align="right"><b>Descrição:</b></td>
				<td><input type="text" name="produto_descricao" required/></td>
			</tr>

			<tr>
				<td align="right"><b>Preço:</b></td>
				<td><input type="text" name="produto_preco" required/></td>
			</tr>

			<tr align="center">
				<td colspan="8"><input type="submit" name="insert_post" value="Inserir"/></td>
			</tr>
            
		</table>
	</form>
    <br>
    <a href="produto.php"><input type="button" value="Voltar"/></a><br>
</body>
 <script src="assets/js/main.js"></script>
</html>
<?php 
include 'conexao.php';

if(isset($_POST['insert_post'])){
	//pega do form
	$produto_nome = mysqli_real_escape_string($conn,$_POST['produto_nome']);
	$produto_descricao = mysqli_real_escape_string($conn,$_POST['produto_descricao']);
	$produto_preco = mysqli_real_escape_string($conn,$_POST['produto_preco']);

  //query
	$sql = "INSERT INTO produtos (produto_id,produto_nome,produto_descricao,produto_preco) VALUES ('','$produto_nome','$produto_descricao','$produto_preco')";

	$insere = mysqli_query($conn,$sql);
//verificando se inseriu com sucesso
	if($insere){
		echo "<font color=green><b>Produto cadastrado com sucesso!!</font></b>";
	}else{
		echo "<font color=red><b>ERRO: Produto nao foi cadastrado!!</font></b>";
	}
}
?>