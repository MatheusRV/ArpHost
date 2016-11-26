<?php include("../header.php"); ?>
	<div class="grid grid-pad">
	    <div class="col-1-3 push-1-3">
<?php include ("../act/conexao.php");

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
		</div>
	</div>
<?php include("../footer.php"); ?>