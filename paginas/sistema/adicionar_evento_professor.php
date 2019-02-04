<?php
// Header
include_once 'includes/header_professor.php';
// conexao
include_once 'php_action/db_connect.php';
?>



<div class="row">
	<div class="col s12 m6 push-m3">
		
		<br/>
			<h5 class="light center">Criação do Evento</h5>

		<form action="php_action/create_evento_professor.php" method="POST">

			<!--<input type="hidden" name="id" value="<?php echo $dados['id'];?>"> -->

<!-- TITULO/EVENTO -->

			<div class="input-field col s12">
				<input type="text" name="titulo_evento" id="titulo_evento" class="validate" required>
				<label for="titulo_evento">Titulo do Evento</label>
			</div>

<!-- DATA/EVENTO -->

			<div class="input-field col s6">
				<input type="text" name="data_evento" id="data_evento" class="datepicker validate" required>
				<label for="data_evento">Data da Entrega</label>
			</div>

<!-- HORA/EVENTO -->

			<div class="input-field col s6">
				<input type="text" name="hora_evento" id="hora_evento" class="timepicker validate" required>
				<label for="hora_evento">Hora da Entrega</label>
			</div>


<!-- MEMBROS -->

			<div class="input-field col s12">
				<input type="number" name="membros" id="membros" placeholder="Membros" class="validate" required>
				<label for="membros">Membros</label>
			</div>

<!-- OBSERVACOES -->

			<div class="input-field col s12">
				<input name="observacao_evento" id="observacao_evento" placeholder="Observações" class="validate" maxlength="500" class="materialize-textarea">				
			</div>	

<!-- CURSO -->
			<div class="input-field col s6">
				<select name="curso_evento" id="curso_evento" class="validate" required >
				  <option value="" disabled selected>Selecione</option>

				  <?php
						$busca_dados = "SELECT * FROM cursos ORDER BY titulo";
						$dados = mysqli_query($conn, $busca_dados) or die(mysql_error());

						while($linhas = mysqli_fetch_array($dados) ) {

							$titulo_curso = $linhas['titulo'];

							echo "<option value='$titulo_curso'>$titulo_curso</option>";
						}
					?>	
				  
				</select>
				<label for="curso_evento">Curso</label>
			</div>	



<!-- TURMA -->
			<div class="input-field col s6">
				<select name="turma_evento" id="turma_evento" class="validate" required >
				  <option value="" disabled selected>Selecione</option>

				  <?php
						$busca_dados = "SELECT * FROM turmas ORDER BY id";
						$dados = mysqli_query($conn, $busca_dados) or die(mysql_error());

						while($linhas = mysqli_fetch_array($dados) ) {

							$turma_aluno = $linhas['sigla_turma'];

							echo "<option value='$turma_aluno'>$turma_aluno</option>";
						}
					?>	
				  
				</select>
				<label for="turma_evento">Turma</label>
			</div>			




<!-- BOTOES -->
			<button type="submit" name="btn-cadastrar" class="btn green"> Finalizar </button>
			<a href="consultar_evento_professor.php" class="btn red"> Cancelar</a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
