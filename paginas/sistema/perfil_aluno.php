<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header_aluno.php';

// TRAZENDO DADOS DO ALUNO
	$id = $_SESSION['id_usuario'];
	$sql = "SELECT * FROM alunos WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
	mysqli_close($conn);
?>


<div class="row">
	<div class="col s12 m6 push-m3">

			<br/>
			<br/>
			<br/>
			<br/>
			<br/>

		<form action="php_action/update_aluno.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">

<!-- RGM -->
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['rgm'];?>" name="rgm" id="rgm" class="validate" disabled>
				<label for="rgm">RGM</label>
			</div>

<!-- NOME -->
			<div class="input-field col s6">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>" class="validate" disabled>
				<label for="nome">Nome</label>
			</div>

<!-- SOBRENOME -->
			<div class="input-field col s6">
				<input type="text" name="sobrenome" value="<?php echo $dados['sobrenome'];?>" id="sobrenome" class="validate" disabled>
				<label for="sobrenome">Sobrenome</label>
			</div>


<!-- EMAIL -->
			<div class="input-field col s12">
				<input type="email" value="<?php echo $dados['email'];?>" name="email" id="email" class="validate" disabled>
				<label for="email">Email</label>
			</div>

<!-- CPF -->
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['cpf'];?>" name="cpf" id="cpf" class="validate" disabled>
				<label for="cpf">CPF</label>
			</div>			

<!-- CURSO -->
		
			<div class="input-field col s6">
				<input type="text" value="<?php echo $dados['curso_aluno'];?>" name="curso_aluno" id="curso_aluno" class="validate" disabled>
				<label for="curso_aluno">Curso</label>
			</div>

<!-- TURMA -->
		
			<div class="input-field col s6">
					<input type="text" value="<?php echo $dados['turma_aluno'];?>" name="turma_aluno" id="turma_aluno" class="validate" disabled>
					<label for="curso_aluno">Turma</label>
			</div>


<!-- AVISO -->
		
			<div class="center">
				<p>
					<b>Para Editar/Atualizar essas informações <br/>entre em contato com a coordenação.</b>
				</p>
			</div>


		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
