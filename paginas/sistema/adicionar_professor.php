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
			<h5 class="light center">Adicionar Novo Professor</h5>

		<form action="php_action/create_professor.php" method="POST">


<!-- NOME -->
			<div class="input-field col s6">
				<input type="text" name="nome" id="nome" class="validate" required autofocus>
				<label for="nome">Nome</label>
			</div>

<!-- SOBRENOME -->
			<div class="input-field col s6" >
				<input type="text" name="sobrenome" id="sobrenome" class="validate" required>
				<label for="sobrenome">Sobrenome</label>
			</div>

<!-- EMAIL -->
			<div class="input-field col s12">
				<input type="email" name="email" id="email" class="validate" required>
				<label for="email">Email</label>
				<span class="helper-text" data-error="Incorreto" data-success="Sucesso"></span>
			</div>	

		

<!-- CPF -->
			<div class="input-field col s6">
				<input type="text" name="cpf" id="cpf" class="validate" required maxlength="11">
				<label for="cpf">CPF</label>
			</div>

<!-- SENHA -->
			<div class="input-field col s6">
				<input type="password" name="senha" id="senha" class="validate" maxlength="32" size="11" required>
				<label for="senha">Senha</label>
			</div>		


<!-- CURSO -->
			<div class="input-field col s12">
				<select multiple name="curso_professor" id="curso_professor" class="validate" required >
				  
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
			<button type="submit" name="btn-cadastrar" class="btn green	"> Cadastrar </button>
			<a href="consultar_professor.php" class="btn red"> Cancelar </a>


		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
