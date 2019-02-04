<?
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
//include_once 'includes/message.php';


// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conn, $_GET['id']);

	$sql = "SELECT * FROM turmas WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		
		<form action="php_action/update_turma.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
		<br/>

			<h5 class="light center">Editar Turma</h5>

<!-- SIGLA -->
			<div class="input-field col s12">
				<input type="text" name="sigla_turma" value="<?php echo $dados['sigla_turma'];?>" id="sigla_turma" class="validate" required maxlength="5">
				<label for="sigla_turma">Sigla</label>
			</div>


<!-- SEMESTRE -->
			<div class="input-field col s12">
				<select name="semestre_turma" value="<?php echo $dados['semestre_turma'];?>" id="semestre_turma" class="validate" required >		

				  <!-- POPULANDO SELECT -->
					<optgroup label="Selecionado Anteriomente">
						<option value="<?php echo $dados['semestre_turma'];?>"> <b><?php echo $dados['semestre_turma'];?></b> </option>
					</optgroup>

				  <option value="1° SEMESTRE">1° SEMESTRE</option>
				  <option value="2° SEMESTRE">2° SEMESTRE</option>
				  <option value="3° SEMESTRE">3° SEMESTRE</option>
				  <option value="4° SEMESTRE">4° SEMESTRE</option>
				  <option value="5° SEMESTRE">5° SEMESTRE</option>
				  <option value="6° SEMESTRE">6° SEMESTRE</option>
				  <option value="7° SEMESTRE">7° SEMESTRE</option>
				  <option value="8° SEMESTRE">8° SEMESTRE</option>
				  <option value="9° SEMESTRE">9° SEMESTRE</option>
				  <option value="10° SEMESTRE">10° SEMESTRE</option>

				</select>
				<label for="semestre_turma">Semestre</label>
			</div>


<!-- CURSO/EVENTO -->

			<div class="input-field col s12">
				<select name="curso_turma" id="curso_turma" class="validate" required>

					<!-- POPULANDO SELECT -->
					<optgroup label="Selecionado Anteriomente">
						<option value="<?php echo $dados['curso_turma'];?>"> <b><?php echo $dados['curso_turma'];?></b> </option>
					</optgroup>

					<?php
						$busca_dados = "SELECT * FROM cursos ORDER BY titulo";
						$dados = mysqli_query($conn, $busca_dados) or die(mysql_error());

						while($linhas = mysqli_fetch_array($dados) ) {

							$titulo_curso = $linhas['titulo'];

							echo "<option value='$titulo_curso'>$titulo_curso</option>";
						}
					?>		
							
				</select>
				<label>Curso</label>
			</div>

			
<!-- BOTOES -->			
			<button type="submit" name="btn-editar" class="btn green"> Atualizar</button>
			<a href="consultar_turma.php" class="btn red"> Cancelar </a>


		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
