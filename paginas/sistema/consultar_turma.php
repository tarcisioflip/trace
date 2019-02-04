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
		<a href="adicionar_turma.php" class="btn waves-effect green right">Adicionar Turma</a>
		<br/>
		<br/>

		<table class="striped">
			<thead>
				<tr>
					<th>Id:</th>
					<th>Sigla:</th>
					<th>Semestre:</th>														
					<th>Curso:</th>														
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM turmas ORDER BY id";
				$resultado = mysqli_query($conn, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>

				<tr>
					
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['sigla_turma']; ?></td>
					<td><?php echo $dados['semestre_turma']; ?></td>
					<td><?php echo $dados['curso_turma']; ?></td>				
					

					<td><a href="editar_turma.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir  <b><?php echo $dados['sigla_turma'] ?></b>?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/delete_turma.php" method="POST">
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

