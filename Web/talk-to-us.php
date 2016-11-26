<?php include("../header.php"); ?>
	<div class="grid grid-pad">
	    <div class="col-1-3 push-1-3">
		    <div class="content">  
			    <form id="contact" action="act/enviar_formulario.php" method="post">
			    	<h3>Form. de Contato  <img src="assets/images/icones/contato.png"/></h3>
					<h4>Escreva de forma clara e objetiva para maiores esclarecimentos</h4>
					<fieldset>
						<input placeholder="Nome" type="text" tabindex="1" required autofocus>
			    	</fieldset>
					<fieldset>
						<input placeholder="E-mail" type="email" tabindex="2" required>
				    </fieldset>
				    <fieldset>
			          <input placeholder="Número de Telefone (opcional)" type="tel" tabindex="3">
			        </fieldset>
			        <fieldset>
			          <input placeholder="Seu Website (opcional)" type="url" tabindex="4">
			        </fieldset>
			        <fieldset>
			          <textarea placeholder="Digite sua mensagem aqui..." tabindex="5" required></textarea>
			        </fieldset>
			        <fieldset>
			          <button name="enviar" type="submit" id="contact-submit" value="enviar">Enviar</button>
			        </fieldset>
			    </form>
		    </div>
		</div>
	</div>
<?php include("footer.php"); ?>