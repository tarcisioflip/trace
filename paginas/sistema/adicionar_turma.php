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

		<form action="php_action/create_turma.php" method="POST">
		<!-- <input type="hidden" name="id" value="<?php echo $dados['id'];?>"> -->
		<br/>

			<h5 class="light center">Adicionar Nova Turma</h5>


<!-- SIGLA TURMA -->
			<div class="input-field col s12">
				<input type="text" name="sigla_turma" id="sigla_turma" class="validate" required autofocus maxlength="5">
				<label for="sigla_turma">Sigla</label>
			</div>

<!-- SEMESTRE TURMA -->
			<div class="input-field col s12">
				<select name="semestre_turma" id="semestre_turma" class="validate" required >
				  <option value="" disabled selected>Selecione</option>

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

<!-- CURSO -->
		
			<div class="input-field col s12">
				<select name="curso_turma" id="curso_turma" class="validate" required>
					<option value="" disabled selected required>Selecione o Curso</option>

					<?php
						$busca_dados = "SELECT * FROM cursos ORDER BY titulo";
						$dados = mysqli_query($conn, $busca_dados) or die(mysql_error());

						while($linhas = mysqli_fetch_array($dados) ) {

							$titulo_curso = $linhas['titulo'];

							echo "<option value='$titulo_curso'>$titulo_curso</option>";
						}
					?>		
							
				</select>
				
			</div>


<!-- BOTOES -->
			<button type="submit" name="btn-cadastrar" class="btn green"> Cadastrar </button>
			<a href="consultar_turma.php" class="btn red"> Cancelar</a>

			
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
