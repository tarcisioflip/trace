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
			<h5 class="light center">Adicionar Nova Matéria</h5>

		<form action="php_action/create_materia.php" method="POST">

<!-- TITULO -->

			<div class="input-field col s12">
				<input type="text" name="titulo_materia" id="titulo_materia" class="validate" required autofocus>
				<label for="titulo_materia">Matéria</label>
			</div>

<!-- CARGA HORARIA -->

			<div class="input-field col s12">
				<input type="text" name="carga_horaria" id="carga_horaria" class="validate" required>
				<label for="carga_horaria">Carga Horária</label>
			</div>


			<button type="submit" name="btn-cadastrar" class="btn green"> Cadastrar </button>
			<a href="consultar_materia.php" class="btn red"> Cancelar</a>

			
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
