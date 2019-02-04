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

	$sql = "SELECT * FROM cursos WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		
		
		<form action="php_action/update_curso.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">

			<br/>
			<h5 class="light center">Editar o Curso</h5>
			

			<div class="input-field col s12">
				<input type="text" name="titulo" value="<?php echo $dados['titulo'];?>" id="titulo" required>
				<label for="titulo">Título</label>
			</div>

			<div class="input-field col s12">
				<select name="area_do_conhecimento" value="<?php echo $dados['area_do_conhecimento'];?>" id="area_do_conhecimento" required >

					

				  <option value="CIÊNCIAS ADMINISTRATIVAS E DE NEGÓCIOS">CIÊNCIAS ADMINISTRATIVAS E DE NEGÓCIOS</option>
				  <option value="CIÊNCIAS BIOLÓGICAS E DA SAÚDE">CIÊNCIAS BIOLÓGICAS E DA SAÚDE</option>
				  <option value="CIÊNCIAS EXATAS E TECNOLÓGICAS">CIÊNCIAS EXATAS E TECNOLÓGICAS</option>		  
				  <option value="CIÊNCIAS HUMANAS E SOCIAIS">CIÊNCIAS HUMANAS E SOCIAIS</option>			  
				</select>
				<label for="area_do_conhecimento">Área do Conhecimento</label>
			</div>
			
			<button type="submit" name="btn-editar" class="btn green"> Atualizar</button>
			<a href="consultar_curso.php" class="btn red"> Cancelar </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
