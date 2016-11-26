<?php include("../header.php"); ?>
	<div class="grid grid-pad">
	    <div class="col-1-3 push-1-3">
		    <form action="remover_produtos.php" method="post" enctype="multipart/form-data">
				<table align="center" width="750" border="2" bgcolor="orange">
					<tr align="center">
						<td colspan="7"><h2>Remover um Produto</h2></td>
					</tr>
					<tr>
						<td align="right"><b>ID: </b></td>
						<td><input type="text" name="produto_id" required/></td>
					</tr>
					<tr>
						<td align="right"><b>Nome: </b></td>
						<td><input type="text" name="produto_nome" required/></td>
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
$produto_id = mysqli_real_escape_string($conn,$_POST['produto_id']);
$produto_nome = mysqli_real_escape_string($conn,$_POST['produto_nome']);

    //query
$sql = "DELETE FROM produtos WHERE produto_id='$produto_id' AND produto_nome='$produto_nome'";
$deleta = mysqli_query($conn, $sql);
    
    //verificando se deletou com sucesso
    if($deleta){
        echo "<font color=green><b>Produto deletado com sucesso!!</font></b>";
    }else{
        echo "<font color=red><b>ERRO: Produto não foi deletado!!</font></b>";
    }
}
?>
		</div>
	</div>
<?php include("../footer.php"); ?>