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

	$sigla_turma = clear($_POST['sigla_turma']);
	$semestre_turma = clear($_POST['semestre_turma']);	
	$curso_turma = clear($_POST['curso_turma']);	

	$sql = "INSERT INTO turmas (sigla_turma, semestre_turma, curso_turma) VALUES ('$sigla_turma', '$semestre_turma', '$curso_turma')";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Turma cadastrado com sucesso!";
		header('Location: ../consultar_turma.php');
	else:
		$_SESSION['mensagem'] = "Erro: Sigla já cadastrada";
		header('Location: ../consultar_turma.php');
	endif;
endif;