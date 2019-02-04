<?
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header_cadastro_aluno.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">

		<br/>
			<h5 class="light center">Cadastro Aluno</h5>
		<br/>	

		<form action="php_action/create_aluno_aluno.php" method="POST">

<!-- RGM -->
			<div class="input-field col s12">
				<input type="number" name="rgm" id="rgm" class="validate" min="10000000" max="99999999" required autofocus axlength="8">
				<label for="rgm">Rgm</label>
			</div>

<!-- NOME -->
			<div class="input-field col s6">
				<input type="text" name="nome" id="nome" class="validate" required>
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
			<div class="input-field col s12">
				<input type="text" name="cpf" id="cpf" maxlength="11" class="validate" required>
				<label for="cpf">CPF</label>
			</div>				

<!-- SENHA -->
			<div class="input-field col s12">
				<input type="password" name="senha" id="senha" maxlength="32" class="validate" required>
				<label for="senha">Senha</label>
			</div>	

<!-- CURSO -->
			<div class="input-field col s6">
				<select name="curso_aluno" id="curso_aluno" class="validate" required >
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
				<label for="curso_aluno">Curso</label>
			</div>	



<!-- TURMA -->
			<div class="input-field col s6">
				<select name="turma_aluno" id="curso_aluno" class="validate" required >
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
				<label for="turma_aluno">Turma</label>
			</div>	




<!-- BOTOES -->
			<div class="center">
				<br/>
				<br/>
				<button type="submit" name="btn-cadastrar" class="btn indigo"> Cadastrar </button>
				

				<!-- JÁ TEM CONTA -->
				<a href="login_aluno.php">
						<p>Já tem conta?</p> 					
				</a>

			</div>

		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
