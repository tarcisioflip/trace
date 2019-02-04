<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$titulo = mysqli_escape_string($conn, $_POST['titulo']);
	$area_do_conhecimento = mysqli_escape_string($conn, $_POST['area_do_conhecimento']);
	
	

	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "UPDATE cursos SET titulo = '$titulo', area_do_conhecimento = '$area_do_conhecimento' WHERE id = '$id'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../consultar_curso.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../consultar_curso.php');
	endif;
endif;