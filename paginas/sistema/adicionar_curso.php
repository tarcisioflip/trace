<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
//include_once 'includes/message.php';

?>

<div class="row">
	<div class="col s12 m6 push-m3">
		
		<br/>
			<h5 class="light center">Adicionar Novo Curso</h5>

		<form action="php_action/create_curso.php" method="POST">
			<!--<input type="hidden" name="id" value="<?php //echo $dados['id'];?>">-->

			<div class="input-field col s12">
				<input type="text" name="titulo" id="titilo" class="validate" required autofocus>
				<label for="titilo">Titulo do Curso</label>
			</div>

			<div class="input-field col s12">
				<select name="area_do_conhecimento" id="area_do_conhecimento" class="validate" required >
				  <option value="" disabled selected>Selecione</option>

				  <option value="Ciências Administrativas e de Negócios">Ciências Administrativas e de Negócios</option>
				  <option value="Ciências Biológicas e da Saúde">Ciências Biológicas e da Saúde</option>
				  <option value="Ciências Exatas e Tecnológicas">Ciências Exatas e Tecnológicas</option>		  
				  <option value="Ciências Humanas e Sociais">Ciências Humanas e Sociais</option>		

				</select>
				<label for="area_do_conhecimento">Área do Conhecimento</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn green"> Cadastrar </button>
			<a href="consultar_curso.php" class="btn red"> Cancelar</a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
