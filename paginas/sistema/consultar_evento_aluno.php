<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header_aluno.php';
// Message
//include_once 'includes/message.php';
?>


<div class="row">
	<div class="col s12 m8 push-m2">

	<br/>	
	<br/>	
	<br/>	

<!-- SUPERIOR TABELA -->
		<table class="highlight">
			<thead>
				<tr>
					<th>Id:</th>
					<th>Evento:</th>															
					<th>Data:</th>														
					<th>Hora:</th>														
					<th></th>																						
				</tr>
			</thead>
<!-- FIM SUPERIOR TABELA -->
			

<!-- BUSCA NO BANCO -->		
			<tbody>
				<?php
				
				$sql = ("SELECT * FROM eventos");
				$resultado = mysqli_query($conn, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>

<!-- FIM BUSCA NO BANCO -->	

<!-- TABELA COM VARIAVEIS PHP -->	
					<tr>
						<td><?php echo $dados['id']; ?></td>
						<td><?php echo $dados['titulo_evento']; ?></td>								
						<td><?php echo $dados['data_evento']; ?></td>				
						<td><?php echo $dados['hora_evento']; ?></td>

					<!-- INCLUIR EQUIPE -->
						<td>
							<a href="adicionar_equipe.php?id=<?php echo $dados['id']; ?>" class="btn-floating"><i class="material-icons indigo">group</i></i></a>
						</td>

					
					</tr>



<!-- FIM TABELA COM VARIAVEIS PHP -->	
				

			   <?php 
				endwhile;
				else: ?>

<!-- TABELA VAZIA -->
				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>														
					<td>-</td>														
				</tr>
<!-- FIM TABELA VAZIA -->
				

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

