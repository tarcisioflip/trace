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

	$titulo_evento = clear($_POST['titulo_evento']);
	$data_evento = clear($_POST['data_evento']);
	$hora_evento = clear($_POST['hora_evento']);
	$membros = clear($_POST['membros']);
	$observacao_evento = clear($_POST['observacao_evento']);
	$curso_evento = clear($_POST['curso_evento']);	
	$turma_evento = clear($_POST['turma_evento']);
		



	$sql = "INSERT INTO eventos (
	titulo_evento, 
	data_evento,
	hora_evento,
	membros,
	observacao_evento,
	curso_evento,
	turma_evento) 
	VALUES (
	'$titulo_evento',
	'$data_evento',
	'$hora_evento',
	'$membros', 
	'$observacao_evento',
	'$curso_evento',
	'$turma_evento')";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Evento criado com sucesso!";
		header('Location: ../consultar_evento_professor.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar no sistema";
		header('Location: ../consultar_evento_professor.php');
	endif;
endif;