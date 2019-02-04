<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header_professor.php';
// Message
//include_once 'includes/message.php';


// Select
if(isset($_GET['id_equipe'])):
	$id_equipe = mysqli_escape_string($conn, $_GET['id_equipe']);

	$sql = "SELECT * FROM equipes WHERE id_equipe = '$id_equipe'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
<div class="row">
	
	<br/>
	<br/>
			<h5 class="light center"><b> <?php echo $dados['titulo_equipe'];?> </b></h5>

	<div class="col s12 m6 push-m3">
		<form action="php_action/update_equipe.php" method="POST">


			<input type="hidden" name="id_equipe" value="<?php echo $dados['id_equipe'];?>">

<!-- TITULO EQUIPE -->
				<br/>
				<div class="input-field col s2">
					<input type="text" name="id_equipe" id="id_equipe" class="validate" disabled value="<?php echo $dados['id_equipe'];?>">
					<label for="id_equipe">ID</label>
				</div>				


<!-- TITULO EQUIPE -->
				<div class="input-field col s8">
					<input type="text" name="titulo_equipe" id="titulo_equipe" class="validate" required value="<?php echo $dados['titulo_equipe'];?>">
					<label for="titulo_equipe">Nome da equipe</label>
				</div>

<!-- NOTA EQUIPE -->

				<div class="input-field col s2">
					<input type="text" name="nota_equipe" id="nota_equipe" class="validate"
					value="<?php echo $dados['nota_equipe'];?>">
					<label for="nota_equipe">Nota Equipe</label>
				</div>			
	
			
<!-- LABEL -->
				<div class="input-field col s12">
					<label for="titulo_equipe">Integrantes</label>
					<br/>
				</div>	


<!-- ALUNO 1 -->
	<!-- RGM1 -->
				<div class="input-field col s4">
					<input type="text" name="rgm1" id="rgm1" class="validate" required maxlength="8"
					value="<?php echo $dados['rgm1'];?>">
					<label for="rgm1">Rgm</label>
				</div>

	<!-- NOME1 -->
				<div class="input-field col s6">
					<input type="text" name="nome1" id="nome1" class="validate" required
					value="<?php echo $dados['nome1'];?>">
					<label for="nome1">Nome</label>
				</div>

	<!-- NOTA ALUNO1 -->

				<div class="input-field col s2">
					<input type="text" name="nota_aluno1" id="nota_aluno1" required class="validate"
					value="<?php echo $dados['nota_aluno1'];?>">
					<label for="nota_aluno1">Nota</label>
				</div>	
					

<!-- ALUNO 2 -->
	<!-- RGM2 -->
				<div class="input-field col s4">
					<input type="text" name="rgm2" id="rgm2" class="validate" required maxlength="8"
					value="<?php echo $dados['rgm2'];?>">
					<label for="rgm2">Rgm</label>
				</div>

	<!-- NOME2 -->
				<div class="input-field col s6">
					<input type="text" name="nome2" id="nome2" class="validate" required
					value="<?php echo $dados['nome2'];?>">
					<label for="nome2">Nome</label>
				</div>

	<!-- NOTA ALUNO2 -->

				<div class="input-field col s2">
					<input type="text" name="nota_aluno2" id="nota_aluno2" required class="validate"
					value="<?php echo $dados['nota_aluno2'];?>">
					<label for="nota_aluno2">Nota</label>
				</div>				

<!-- ALUNO 3 -->
	<!-- RGM3 -->
				<div class="input-field col s4">
					<input type="text" name="rgm3" id="rgm3" class="validate" required maxlength="8"
					value="<?php echo $dados['rgm3'];?>">
					<label for="rgm3">Rgm</label>
				</div>

	<!-- NOME3 -->
				<div class="input-field col s6">
					<input type="text" name="nome3" id="nome3" class="validate" required
					value="<?php echo $dados['nome3'];?>">
					<label for="nome3">Nome</label>
				</div>

	<!-- NOTA ALUNO3 -->

				<div class="input-field col s2">
					<input type="text" name="nota_aluno3" id="nota_aluno3" required class="validate"
					value="<?php echo $dados['nota_aluno3'];?>">
					<label for="nota_aluno3">Nota</label>
				</div>				

<!-- ALUNO 4 -->
	<!-- RGM4 -->
				<div class="input-field col s4">
					<input type="text" name="rgm4" id="rgm4" class="validate" required maxlength="8"
					value="<?php echo $dados['rgm4'];?>">
					<label for="rgm4">Rgm</label>
				</div>

	<!-- NOME4 -->
				<div class="input-field col s6">
					<input type="text" name="nome4" id="nome4" class="validate" required
					value="<?php echo $dados['nome4'];?>">
					<label for="nome4">Nome</label>
				</div>

	<!-- NOTA ALUNO4 -->

				<div class="input-field col s2">
					<input type="text" name="nota_aluno4" id="nota_aluno4" required class="validate"
					value="<?php echo $dados['nota_aluno4'];?>">
					<label for="nota_aluno4">Nota</label>
				</div>				


<!-- ALUNO 5 -->
	<!-- RGM5 -->
				<div class="input-field col s4">
					<input type="text" name="rgm5" id="rgm5" class="validate" required maxlength="8"
					value="<?php echo $dados['rgm5'];?>">
					<label for="rgm5">Rgm</label>
				</div>

	<!-- NOME5 -->
				<div class="input-field col s6">
					<input type="text" name="nome5" id="nome5" class="validate" required
					value="<?php echo $dados['nome5'];?>">
					<label for="nome5">Nome</label>
					<br/>
					<br/>
				</div>

	<!-- NOTA ALUNO5 -->

				<div class="input-field col s2">
					<input type="text" name="nota_aluno5" id="nota_aluno5" required class="validate"
					value="<?php echo $dados['nota_aluno5'];?>">
					<label for="nota_aluno5">Nota</label>
				</div>		



<!-- ANEXO -->

				<div class="input-field col s12">
					<input type="text" name="anexo" id="anexo" class="validate" placeholder="Cole o link do drive" value="<?php echo $dados['anexo'];?>">
					<label for="anexo">Anexo</label>
				</div>



			<div class="center">
				<button type="submit" name="btn-editar" class="btn indigo">Salvar Avaliação</button>
			</div>

		</form>	
	</div>
</div>
<?php
// Footer
include_once 'includes/footer.php';
?>
