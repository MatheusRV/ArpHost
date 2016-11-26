<?php include("header.php"); ?>
	<div class="grid grid-pad">
	    <div class="col-1-3 push-1-3">
			<h3>Login <img src="assets/images/icones/lock.png"></h3>
			<form class="login-form" method="post" action="act/processa_login.php" enctype="multipart/form-data">
				<input type="text" name="login" id="login" placeholder="Nome de usuário" required autofocus/>
				<input type="password" name="senha" id="senha" placeholder="Senha" required autofocus/>
				<button name="entrar" type="submit" id="contact-submit" value="entrar">Entrar</button>
				<p class="message">Não tem conta? <a href="register.php">Criar uma conta</a></p>
			</form>
		</div>
	</div>
<?php include("footer.php"); ?>