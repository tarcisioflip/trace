<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header_professor.php';
// Message
//include_once 'includes/message.php';


// Select
if(isset($_GET['evento_equipe'])):
	$evento_equipe = mysqli_escape_string($conn, $_GET['evento_equipe']);

	$sql = "SELECT * FROM equipes WHERE evento_equipe = '$evento_equipe'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<br/>
<br/>
<br/>

<div class="row">
	<div class="col s12 m8 push-m2">


		<table class="striped">
			<thead>
				<tr>
					<th>Id:</th>
					<th>Equipe:</th>
					<th>Data/Hora:</th>														
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM equipes";
				$resultado = mysqli_query($conn, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>

				<tr>
					<td><?php echo $dados['id_equipe']; ?></td>
					<td><?php echo $dados['titulo_equipe']; ?></td>
					<td><?php echo $dados['data_equipe']; ?></td>				
					

				<!-- VIZUALIZAR/EDITAR -->	
					
					<td>

						<a href="editar_equipe.php?id_equipe=<?php echo $dados['id_equipe']; ?>" class="btn-floating indigo"><i class="material-icons">playlist_add_check</i></a></td>

					<td>

				<!-- APAGAR -->		

						<a href="#modal<?php echo $dados['id_equipe']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id_equipe']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir a matéria <b><?php echo $dados['titulo_equipe'] ?></b>?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/delete_equipe.php" method="POST">

					      	<input type="hidden" name="id_equipe" value="<?php echo $dados['id_equipe']; ?>">
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
