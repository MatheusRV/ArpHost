<?php
$enviar = $_POST['enviar'];

if (isset($enviar)) {
	$mensagem = "<br>Mensagem enviada em ".date("d/m/Y").", <br>"; 
	echo $mensagem;
	
	$email = "<font color=blue><b>contato@arphost.com</font></b>";
	$assunto = "<font color=blue><b>Contato</font></b>";
	
	echo "<br><font color=blue><b>Enviado para </b></font>".$email." <font color=blue><b>com o assunto: </b></font>".$assunto."<br>";
	echo "<font color=green><b><br>
	<br>Formulário enviado com Sucesso!!<br>Você será redirecionado em 5 segundos...
</font></b>";

		header("Location: ../talk-to-us.php?action=send&vs=ok");
		?>
		<script type="text/javascript">
			location.href = "../noticiaListar.php?action=send&vs=ok";
		</script>
		<?

}
?>