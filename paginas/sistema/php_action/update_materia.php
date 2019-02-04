<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):

	$titulo_materia = mysqli_escape_string($conn, $_POST['titulo_materia']);
	$carga_horaria = mysqli_escape_string($conn, $_POST['carga_horaria']);
	
	

	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "UPDATE materias SET titulo_materia = '$titulo_materia', carga_horaria = '$carga_horaria' WHERE id = '$id'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../consultar_materia.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../consultar_materia.php');
	endif;
endif;