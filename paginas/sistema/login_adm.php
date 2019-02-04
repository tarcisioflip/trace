<?php
// Conexão
require_once 'php_action/db_connect.php';
// Header
include_once 'includes/header_login.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
	$erros = array();
	$cpf = mysqli_escape_string($conn, $_POST['cpf']);
	$senha = mysqli_escape_string($conn, $_POST['senha']);

	if(isset($_POST['lembrar-senha'])):

		setcookie('cpf', $cpf, time()+3600);
		setcookie('senha', md5($senha), time()+3600);
	endif;

	if(empty($cpf) or empty($senha)):
		$erros[] = "
					<div class='center'>
						<p class='red-text'>
							O campo login/senha precisa ser preenchido
						</p>
					</div>

					";
	else:
		// 105 OR 1=1 
	    // 1; DROP TABLE teste

		$sql = "SELECT cpf FROM adm WHERE cpf = '$cpf'";
		$resultado = mysqli_query($conn, $sql);		

		if(mysqli_num_rows($resultado) > 0):
		$senha = md5($senha);       
		$sql = "SELECT * FROM adm WHERE cpf = '$cpf' AND senha = '$senha'";



		$resultado = mysqli_query($conn, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($conn);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('Location: consultar_curso.php');
			else:
				$erros[] = "
								<div class='center'>
									<p class='red-text'>
										Usuário e senha não conferem.
									</p>
								</div>
							
							";
			endif;

		else:
			$erros[] = "
							<div class='center'>
								<p class='red-text'>
									Usuário inexistente.
								</p>
							</div>
							
						";
		endif;

	endif;

endif;
?>

<!-- HTML -->

<div class="row">
	<div class="col s6 m6 push-m3">

		<br/>
		<br/>
		<br/>
			<h5 class="light center">Administrador</h5>
		<br/>	
		<br/>	

		<div class="container">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

				<!-- CPF -->
							<div class="input-field col s12">
								<i class="material-icons prefix">account_circle</i>
								<input type="text" name="cpf" id="cpf" min="11" maxlength="11" class="validate"
								value="<?php echo isset($_COOKIE['cpf']) ? $_COOKIE['cpf'] : '' ?>">
								<label for="cpf">CPF</label>
							</div>		
						
				<!-- SENHA -->
							<div class="input-field col s12">
								<i class="material-icons prefix">lock</i>
								<input type="password" name="senha" id="senha" maxlength="20" class="validate"
								value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>">
								<label for="senha">Senha</label>
							</div>	

				<!-- MENSAGEM DE ERRO -->
							<?php 
							if(!empty($erros)):
								foreach($erros as $erro):
									echo $erro;
								endforeach;
							endif;
							?>			

				<!-- LEMBRAR SENHA 	-->		
							<div class="input-field col s12">
								<div class="center">
									<label>
										<input class="with-gap" type="radio" name="lembrar-senha">
										<span>Lembrar senha?</span>
									</label>
								</div>
							</div>	
				

				<!-- ESQUECEU SENHA 
							<a href="#">
								<div class="center">
									<p>Esqueceu sua senha?</p>
									<br/>
								</div>
							</a>
				-->

				<!-- BOTOES -->
							<div class="center">
								<button type="submit" name="btn-entrar" class="btn indigo"> Entrar </button>
							</div>	


			</form>
		</div>
	</div>
</div>
<?php
// Footer
include_once 'includes/footer.php';
?>


<!-- FIM HTML -->





