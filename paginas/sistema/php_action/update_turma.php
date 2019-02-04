<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):

	$sigla_turma = mysqli_escape_string($conn, $_POST['sigla_turma']);
	$semestre_turma = mysqli_escape_string($conn, $_POST['semestre_turma']);
	$curso_turma = mysqli_escape_string($conn, $_POST['curso_turma']);
	
	
	

	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "UPDATE turmas SET sigla_turma = '$sigla_turma', semestre_turma = '$semestre_turma', curso_turma = '$curso_turma' WHERE id = '$id'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../consultar_turma.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../consultar_turma.php');
	endif;
endif;