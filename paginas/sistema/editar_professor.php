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

	$sql = "SELECT * FROM professores WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">

			<br/>
			<h5 class="light center">Editar Professor</h5>
			<br/>

		<form action="php_action/update_professor.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">


<!-- NOME -->
			<div class="input-field col s6">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>" required>
				<label for="nome">Nome</label>
			</div>

<!-- SOBRENOME -->
			<div class="input-field col s6">
				<input type="text" name="sobrenome" value="<?php echo $dados['sobrenome'];?>" id="sobrenome" required>
				<label for="sobrenome">Sobrenome</label>
			</div>


<!-- EMAIL -->
			<div class="input-field col s12">
				<input type="email" value="<?php echo $dados['email'];?>" name="email" id="email" required>
				<label for="email">Email</label>
			</div>


<!-- CPF -->
			<div class="input-field col s12">
				<input type="number" value="<?php echo $dados['cpf'];?>" name="cpf" id="cpf" required maxlength="11">
				<label for="cpf">CPF</label>
			</div>

<!-- SENHA -->
			<div class="input-field col s12">
				<input type="password" value="<?php echo $dados['senha'];?>" name="senha" id="senh" required maxlength="32" size="11">
				<label for="senha">Senha</label>
			</div>			

<!-- CURSO -->
			<div class="input-field col s12">
				<select multiple name="curso_professor" id="curso_professor" required >

					<!-- POPULANDO SELECT -->
					<optgroup label="Selecionado Anteriomente">
						<option value="<?php echo $dados['curso_professor'];?>" selected> <b><?php echo $dados['curso_professor'];?></b> </option>
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
				<label for="curso_professor">Curso</label>
			</div>	

<!-- BOTOES -->
			<button type="submit" name="btn-editar" class="btn green"> Atualizar</button>
			<a href="consultar_professor.php" class="btn red"> Cancelar </a>


		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
