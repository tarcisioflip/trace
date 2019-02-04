<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header_professor.php';
// Message
//include_once 'includes/message.php';
?>
<div class="row">
	<div class="col s12 m8 push-m2">


		<br/>
		<br/>
		<a href="adicionar_evento_professor.php" class="btn waves-effect green right">Criar Evento</a>
		<br/>
		<br/>

		<table class="striped">
			<thead>
				<tr>
					<th>Id:</th>
					<th>Evento:</th>
					<th>Curso:</th>														
					<th>Turma:</th>														
					<th>Data:</th>														
					<th>Hora:</th>														
				</tr>
			</thead>

			<tbody>
				<?php
				
				$sql = ("SELECT * FROM eventos");
				$resultado = mysqli_query($conn, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>

				<tr>
					
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['titulo_evento']; ?></td>
					<td><?php echo $dados['curso_evento']; ?></td>				
					<td><?php echo $dados['turma_evento']; ?></td>				
					<td><?php echo $dados['data_evento']; ?></td>				
					<td><?php echo $dados['hora_evento']; ?></td>				
					
				<!-- BOTOES VIZUALIZAR, EDITAR E APAGAR -->

					

					<!-- VIZUALIZAR -->
					<td><a href="consultar_equipe.php?id=<?php echo $dados['id']; ?>" class="btn-floating indigo"><i class="material-icons">view_list</i></a></td>

					<!-- EDITAR -->
					<td><a href="editar_evento_professor.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<!-- APAGAR -->
					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					

				<!-- MODAL DE APAGAR -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir  <b><?php echo $dados['titulo_evento'] ?></b>?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/delete_evento_professor.php" method="POST">
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

