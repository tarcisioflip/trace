<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):

	$titulo_evento = mysqli_escape_string($conn, $_POST['titulo_evento']);
	$data_evento = mysqli_escape_string($conn, $_POST['data_evento']);
	$hora_evento = mysqli_escape_string($conn, $_POST['hora_evento']);
	$membros = mysqli_escape_string($conn, $_POST['membros']);
	$observacao_evento = mysqli_escape_string($conn, $_POST['observacao_evento']);
	$curso_evento = mysqli_escape_string($conn, $_POST['curso_evento']);
	$turma_evento = mysqli_escape_string($conn, $_POST['turma_evento']);
	

	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "UPDATE eventos SET 
	titulo_evento = '$titulo_evento', 
	data_evento = '$data_evento', 
	hora_evento = '$hora_evento', 
	membros = '$membro',	
	observacao_evento = '$observacao_evento'
	curso_evento = '$curso_evento',  
	turma_evento = '$turma_evento'

	WHERE id = '$id'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../consultar_evento_professor.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../consultar_evento_professor.php');
	endif;
endif;