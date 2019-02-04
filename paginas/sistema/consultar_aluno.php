<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
//include_once 'includes/message.php';
?>
<div class="row">
	<div class="col s12 m8 push-m2">

		<br/>
		<br/>
		<a href="adicionar_aluno.php" class="btn green right">Adicionar Aluno</a>
		<br/>
		<br/>

		<table class="striped">
			<thead>
				<tr>
					<th>ID:</th>
					<th>Rgm:</th>
					<th>Nome:</th>					
					<th>Email:</th>					
					<th>CPF:</th>					
					<th>Curso:</th>					
					<th>Turma:</th>											
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM alunos ORDER BY nome";
				$resultado = mysqli_query($conn, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['rgm']; ?></td>
					<td><?php echo $dados['nome']; ?></td>					
					<td><?php echo $dados['email']; ?></td>		
					<td><?php echo $dados['cpf']; ?></td>		
					<td><?php echo $dados['curso_aluno']; ?></td>		
					<td><?php echo $dados['turma_aluno']; ?></td>			

					<td>
						<a href="editar_aluno.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a>
					</td>

					<td>
						<a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a>
					</td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir aluno de RGM: <b><?php echo $dados['rgm'] ?></b>?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/delete_aluno.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>					
					<td>-</td>					
					<td>-</td>
					<td>-</td>
					<td>-</td>					
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

