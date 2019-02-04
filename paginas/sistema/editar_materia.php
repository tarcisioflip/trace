<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
//include_once 'includes/message.php';


// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conn, $_GET['id']);

	$sql = "SELECT * FROM materias WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
<div class="row">
	
	<br/>
			<h5 class="light center">Editar Matéria</h5>

	<div class="col s12 m6 push-m3">
		<form action="php_action/update_materia.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
					

<!-- TITULO -->
			<div class="input-field col s12">
				<input type="text" name="titulo_materia" id="titulo_materia" class="validate" 
				value="<?php echo $dados['titulo_materia'];?>" required>
				<label for="titulo_materia">Matéria</label>
			</div>

			

<!-- CARGA HORARIA -->
			<div class="input-field col s12">
				<input type="text" name="carga_horaria" id="carga_horaria" class="validate"
				value="<?php echo $dados['carga_horaria'];?>" required>
				<label for="carga_horaria">Carga Horária</label>
			</div>
			
			
			<button type="submit" name="btn-editar" class="btn green"> Atualizar</button>
			<a href="consultar_materia.php" class="btn red"> Cancelar </a>
		</form>	
	</div>
</div>
<?php
// Footer
include_once 'includes/footer.php';
?>
