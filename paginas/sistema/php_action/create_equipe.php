<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $conn;
	// sql
	$var = mysqli_escape_string($conn, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	
	$titulo_equipe = clear($_POST['titulo_equipe']);
	$anexo = clear($_POST['anexo']);
	$evento_equipe = clear($_POST['evento_equipe']);

	$rgm1 = clear($_POST['rgm1']);
	$nome1 = clear($_POST['nome1']);

	$rgm2 = clear($_POST['rgm2']);
	$nome2 = clear($_POST['nome2']);

	$rgm3 = clear($_POST['rgm3']);
	$nome3 = clear($_POST['nome3']);

	$rgm4 = clear($_POST['rgm4']);
	$nome4 = clear($_POST['nome4']);

	$rgm5 = clear($_POST['rgm5']);
	$nome5 = clear($_POST['nome5']);
	
		

	$sql = "INSERT INTO equipes (
	titulo_equipe, 
	anexo, 
	evento_equipe,

	rgm1, 
	nome1,

	rgm2, 
	nome2,

	rgm3, 
	nome3,

	rgm4, 
	nome4,

	rgm5, 
	nome5
	) 

	VALUES (
	'$titulo_equipe',
	'$anexo',
	'$evento_equipe',

	'$rgm1',
	'$nome1',

	'$rgm2',
	'$nome2',

	'$rgm3',
	'$nome3',

	'$rgm4',
	'$nome4',

	'$rgm5',
	'$nome5'
	)";


	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Matéria cadastrada com sucesso!";
		header('Location: ../consultar_evento_aluno.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../consultar_evento_aluno.php');
	endif;
endif;