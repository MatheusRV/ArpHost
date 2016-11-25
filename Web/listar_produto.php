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
	<a href="produto.php">
		<input type="button" value="Voltar" />
	</a>
</body>
    <script src="assets/js/main.js"></script>
</html>
<?php include 'conexao.php';

// query
$query = "SELECT * FROM produtos";

$dados = mysqli_query($conn,$query) or die("Erro ao selecionar");
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

echo "\n\n<b><font color=blue><p>Produtos Cadastrados</b></font>\n\n<br><br>Nome  /  Descrição  / Preço<br>-----------------------</p>";
	// se o número de resultados for maior que zero, mostra os dados
if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
	do {
		?>
		<p><?=$linha['produto_id']?> / <?=$linha['produto_nome']?> / <?=$linha['produto_preco']?> / <?=$linha['produto_descricao']?></p>
		<?php
		// finaliza o loop que vai mostrar os dados
	}while($linha = mysqli_fetch_assoc($dados));
}
mysqli_free_result($dados);

?>