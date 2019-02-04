<?php
// Header
include_once 'includes/header_aluno.php';

/*TRAZENDO DADOS DO BANCO*/

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
		
		<br/>
		<br/>
		<br/>
<div class="container">


<!-- TABELA -->
			<form action="php_action/create_equipe.php" method="POST" class="collapsible">

<!-- CABECA INCLUIR EQUIPE -->
			<ul>
				<li>

			<!-- KEY -->
			      <div class="collapsible-header">
			      	<i class="material-icons">vpn_key</i>
			      		<b>ID:</b>&nbsp;
			      			<?php echo $dados['id'];?>
			      </div>
			      		
			<!-- TITULO -->		
			      <div class="collapsible-header">
			      	<i class="material-icons">description</i>
			      		<b>Trabalho:</b>&nbsp;
			      			<?php echo $dados['titulo_evento'];?>
			      </div>	

			<!-- DATA -->
			      <div class="collapsible-header">
			      	<i class="material-icons">date_range</i>
			      		<b>Data:</b>&nbsp;
			      			<?php echo $dados['data_evento'];?>
			      </div> 

			<!-- HORA -->
			      <div class="collapsible-header">
			      	<i class="material-icons">access_time</i>
			      		<b>Hora:</b>&nbsp;
			      			<?php echo $dados['hora_evento'];?>
			      </div>

			<!-- HORA -->
			      <div class="collapsible-header">
			      	<i class="material-icons">group</i>
			      		<b>Equipe de:</b>&nbsp;
			      			<?php echo $dados['membros'];?>
			      </div>  

			<!-- OBSERVACOES -->
			      <div class="collapsible-header">
			      	<i class="material-icons">report_problem</i>
			      		<b>Observações:</b>&nbsp;
			      			<?php echo $dados['observacao_evento'];?>
			      </div>          

			  	</li>
			</ul>	

<!-- FIM CABECA INCLUIR EQUIPE -->		




	<!-- TITULO EQUIPE -->
				<br/>
				<div class="input-field col s12">
					<input type="text" name="titulo_equipe" id="titulo_equipe" class="validate" required autofocus>
					<label for="titulo_equipe">Nome da equipe</label>
				</div>

							
				
	<!-- LABEL -->
				<div class="input-field col s12">
					<label for="titulo_equipe">Integrantes</label>
					<br/>
				</div>	


<!-- ALUNO 1 -->
	<!-- RGM1 -->
				<div class="input-field col s5">
					<input type="text" name="rgm1" id="rgm1" class="validate" required maxlength="8">
					<label for="rgm1">Rgm</label>
				</div>

	<!-- NOME1 -->
				<div class="input-field col s7">
					<input type="text" name="nome1" id="nome1" class="validate" required>
					<label for="nome1">Nome</label>
				</div>
					

<!-- ALUNO 2 -->
	<!-- RGM2 -->
				<div class="input-field col s5">
					<input type="text" name="rgm2" id="rgm2" class="validate" required maxlength="8">
					<label for="rgm2">Rgm</label>
				</div>

	<!-- NOME2 -->
				<div class="input-field col s7">
					<input type="text" name="nome2" id="nome2" class="validate" required>
					<label for="nome2">Nome</label>
				</div>

<!-- ALUNO 3 -->
	<!-- RGM3 -->
				<div class="input-field col s5">
					<input type="text" name="rgm3" id="rgm3" class="validate" required maxlength="8">
					<label for="rgm3">Rgm</label>
				</div>

	<!-- NOME3 -->
				<div class="input-field col s7">
					<input type="text" name="nome3" id="nome3" class="validate" required>
					<label for="nome3">Nome</label>
				</div>

<!-- ALUNO 4 -->
	<!-- RGM4 -->
				<div class="input-field col s5">
					<input type="text" name="rgm4" id="rgm4" class="validate" required maxlength="8">
					<label for="rgm4">Rgm</label>
				</div>

	<!-- NOME4 -->
				<div class="input-field col s7">
					<input type="text" name="nome4" id="nome4" class="validate" required>
					<label for="nome4">Nome</label>
				</div>


<!-- ALUNO 5 -->
	<!-- RGM5 -->
				<div class="input-field col s5">
					<input type="text" name="rgm5" id="rgm5" class="validate" required maxlength="8">
					<label for="rgm5">Rgm</label>
				</div>

	<!-- NOME5 -->
				<div class="input-field col s7">
					<input type="text" name="nome5" id="nome5" class="validate" required>
					<label for="nome5">Nome</label>
				</div>


<!-- ANEXO -->

				<div class="input-field col s12">
					<input type="text" name="anexo" id="anexo" class="validate" placeholder="Cole o link do drive">
					<label for="anexo">Anexo</label>
				</div>	


	<!-- RELACAO DAS TABELAS (INVISUVEL) -->
				<div class="input-field col s12">
					<input type="hidden" name="evento_equipe" id="evento_equipe" value="<?php echo $dados['id'];?>">
				</div>		



	<!-- BOTOES -->
				<div class="center">
					<button type="submit" name="btn-cadastrar" class="btn indigo"> Incluir </button>
				</div>
				<br/>
			</form>
		</div>	
		
	</div>
</div>



<?php
// Footer
include_once 'includes/footer.php';
?>
