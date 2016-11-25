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
	<title>ArpHost | Cliente</title>    
</head>
<body>
    <header>
        <div id="saudacoes"></div>
		<img id="icone" align="center">
        <!-- Título -->
		<h1 class="header-text">ArpHost</h1>
		<!-- Menu -->
		<nav align="middle" class="menu">
			<a href="clientes.php" class="btn">Página Inicial </a>
			<a href="cadastro.php" class="btn">Inserir Cliente </a>
			<a href="listar_usuarios.php" class="btn">Listar Cliente </a>
			<a href="editar_cliente.php" class="btn">Editar Cliente </a>
			<a href="remover_cliente.php" class="btn">Remover Cliente </a>
			<a href="dashboard_admin.php" class="btn">Voltar para Painel</a>
		</nav>
	</header>
    
    <form action="editar_cliente.php" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="orange">

			<tr align="center">
				<td colspan="7"><h2>Editar Cliente</h2></td>
			</tr>

			<tr>
				<td align="right"><b>ID: </b></td>
				<td><input type="text" name="ID" required/></td>
			</tr>

			<tr>
				<td align="right"><b>Login: </b></td>
				<td><input type="text" name="login" required/></td>
			</tr>

			<tr align="center">
				<td colspan="8"><input type="submit" name="edit_post" value="Editar"/></td>
			</tr>
            
		</table>
	</form>
	<a href="produto.php">
		<input type="button" value="Voltar" />
	</a>
</body>
    <script src="assets/js/main.js"></script>
</html>
<?php include 'conexao.php';

if(isset($_POST['edit_post'])){
    //pega do form
$ID = mysqli_real_escape_string($conn,$_POST['ID']);
$login = mysqli_real_escape_string($conn,$_POST['login']);

    //query
$sql = "UPDATE usuarios SET ID='$ID',login='$login' WHERE ID=$ID and login=$login";
$edita = mysqli_query($conn, $sql);

    //verificando se editou com sucesso
    if($edita){
        echo "<font color=green><b>Cliente editado com sucesso!!</font></b>";
    }else{
        echo "<font color=red><b>ERRO: Cliente não foi editado!!</font></b>";
    }
}
?>