<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header_professor.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conn, $_GET['id']);
	$sql = "SELECT * FROM eventos WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		
		
		<form action="php_action/update_evento_professor.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">

			<br/>
			<h5 class="light center">Editar Evento</h5>
			

<!-- TITULO/EVENTO -->

			<div class="input-field col s12">
				<input type="text" name="titulo_evento" id="titulo_evento" required
				value="<?php echo $dados['titulo_evento'];?>">
				<label for="titulo_evento">Titulo do Evento</label>
			</div>			

<!-- DATA/EVENTO -->

			<div class="input-field col s6">
				<input type="text" name="data_evento" id="data_evento" class="datepicker" required 
				value="<?php echo $dados['data_evento'];?>">
				<label for="data_evento">Data da Entrega</label>
			</div>

<!-- HORA/EVENTO -->

			<div class="input-field col s6">
				<input type="text" name="hora_evento" id="hora_evento" class="timepicker" required 
				value="<?php echo $dados['hora_evento'];?>">
				<label for="hora_evento">Hora da Entrega</label>
			</div>


<!-- MEMBROS -->

			<div class="input-field col s12">
				<input type="number" name="membros" id="membros" placeholder="Membros" class="validate" required value="<?php echo $dados['membros'];?>">
				<label for="membros">Membros</label>
			</div>

<!-- OBSERVACOES -->

			<div class="input-field col s12">
				<input name="observacao_evento" id="observacao_evento" placeholder="Observações" maxlength="500" class="materialize-textarea" 
				value="<?php echo $dados['observacao_evento'];?>">				
			</div>	

<!-- CURSO -->
			<div class="input-field col s6">
				<select name="curso_evento" id="curso_evento" required >
				  

			<!-- POPULANDO SELECT -->
					<optgroup label="Selecionado Anteriomente">
						<option value="<?php echo $dados['curso_evento'];?>"> <b><?php echo $dados['curso_evento'];?></b> </option>
					</optgroup>

				  <?php
						$busca_dados = "SELECT * FROM cursos ORDER BY id";
						$dados = mysqli_query($conn, $busca_dados) or die(mysql_error());

						while($linhas = mysqli_fetch_array($dados) ) {

							$turma_aluno = $linhas['titulo'];

							echo "<option value='$turma_aluno'>$turma_aluno</option>";
						}
					?>	
				  
				</select>
				<label for="curso_evento">Curso</label>
			</div>	

<!-- TURMA -->
			<div class="input-field col s6">
				<select name="turma_evento" id="turma_evento" required >

				  <option value="">Selecione</option>

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
			<button type="submit" name="btn-editar" class="btn green"> Atualizar</button>
			<a href="consultar_evento_professor.php" class="btn red"> Cancelar </a>


		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
