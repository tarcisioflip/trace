<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "DELETE FROM eventos WHERE id = '$id'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../consultar_evento_professor.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../consultar_evento_professor.php');
	endif;
endif;