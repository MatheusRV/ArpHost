<?php include("../header.php"); ?>
	<div class="grid grid-pad">
	    <div class="col-1-3 push-1-3">
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
include '../act/conexao.php';

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
		</div>
	</div>
<?php include("../footer.php"); ?>