<?php include("../header.php"); ?>
	<div class="grid grid-pad">
	    <div class="col-1-3 push-1-3">
    <form action="remover_cliente.php" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="orange">

			<tr align="center">
				<td colspan="7"><h2>Remover Cliente</h2></td>
			</tr>

			<tr>
				<td align="right"><b>ID: </b></td>
				<td><input type="text" name="ID" required/></td>
			</tr>

			<tr>
				<td align="right"><b>Nome: </b></td>
				<td><input type="text" name="login" required/></td>
			</tr>

			<tr align="center">
				<td colspan="8"><input type="submit" name="remove_post" value="Remover"/></td>
			</tr>
            
		</table>
	</form>
	<a href="produto.php">
		<input type="button" value="Voltar" />
	</a>
</body>
    <script src="assets/js/main.js"></script>
</html>
<?php include("../act/conexao.php");

if(isset($_POST['remove_post'])){
    //pega do form
$ID = mysqli_real_escape_string($conn,$_POST['ID']);
$login = mysqli_real_escape_string($conn,$_POST['login']);

    //query
$sql = "DELETE FROM usuarios WHERE ID='$ID' AND login='$login'";
$deleta = mysqli_query($conn, $sql);
    
    //verificando se deletou com sucesso
    if($deleta){
        echo "<font color=green><b>Cliente deletado com sucesso!!</font></b>";
    }else{
        echo "<font color=red><b>ERRO: Cliente não foi deletado!!</font></b>";
    }
}
?>
		</div>
	</div>
<?php include("../footer.php"); ?>