<?php include("../header.php"); ?>
	<div class="grid grid-pad">
	    <div class="col-1-3 push-1-3">
<?php include ("../act/conexao.php");

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
		</div>
	</div>
<?php include("../footer.php"); ?>