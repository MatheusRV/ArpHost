<?php include("header.php"); ?>
	<div class="grid grid-pad">
	    <div class="col-1-3 push-1-3">
		    <h3>Cadastro de Usuário <img src="assets/images/icones/signup.png"/></h3>
		    <form class="login-form" method="post" action="processa_registro.php" enctype="multipart/form-data">
		    	<input type="text" name="login" id="login" placeholder="Nome de Usuário" required autofocus/>
			    <input type="password" name="senha" id="senha" placeholder="Senha" required autofocus/>
		        <button name="entrar" type="submit" id="cadastrar" value="Cadastrar">Cadastrar</button>
		        <p class="message">Já é registrado? <a href="./login.php">Entre aqui</a></p>
		    </form>
		</div>
	</div>
<?php include("footer.php"); ?>