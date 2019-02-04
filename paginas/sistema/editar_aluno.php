<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conn, $_GET['id']);

	$sql = "SELECT * FROM alunos WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">

			<br/>
			<h5 class="light center">Editar o Aluno</h5>

		<form action="php_action/update_aluno.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">

<!-- RGM -->
			<div class="input-field col s12">
				<input type="number" value="<?php echo $dados['rgm'];?>" name="rgm" id="rgm" class="validate" min="10000000" max="99999999" required autofocus maxlength="8">
				<label for="rgm">RGM</label>
			</div>

<!-- NOME -->
			<div class="input-field col s6">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>" class="validate" required>
				<label for="nome">Nome</label>
			</div>

<!-- SOBRENOME -->
			<div class="input-field col s6">
				<input type="text" name="sobrenome" value="<?php echo $dados['sobrenome'];?>" id="sobrenome" class="validate" required>
				<label for="sobrenome">Sobrenome</label>
			</div>


<!-- EMAIL -->
			<div class="input-field col s12">
				<input type="email" value="<?php echo $dados['email'];?>" name="email" id="email" class="validate" required>
				<label for="email">Email</label>
			</div>

<!-- CPF -->
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['cpf'];?>" name="cpf" id="cpf" class="validate" required>
				<label for="cpf">CPF</label>
			</div>			

<!-- SENHA -->
			<div class="input-field col s12">
				<input type="password" value="<?php echo $dados['senha'];?>" name="senha" maxlength="32" size="11" id="senha" class="validate" required>
				<label for="senha">Senha</label>
			</div>		

<!-- CURSO -->
			<div class="input-field col s6">
				<select name="curso_aluno" id="curso_aluno" class="validate" required>
				  

			<!-- POPULANDO SELECT -->
					<optgroup label="Selecionado Anteriomente">
						<option value="<?php echo $dados['curso_aluno'];?>"> <b><?php echo $dados['curso_aluno'];?></b> </option>
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
				<label for="curso_aluno">Curso</label>
			</div>	


<!-- TURMA -->
			<div class="input-field col s6">
				<select name="turma_aluno" id="turma_aluno" class="validate" required>

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
				<label for="turma_aluno">Turma</label>
			</div>	



<!-- BOTOES -->
			<button type="submit" name="btn-editar" class="btn green"> Atualizar</button>
			<a href="consultar_aluno.php" class="btn red"> Cancelar </a>


		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
