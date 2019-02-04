<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	
	$id_equipe = mysqli_escape_string($conn, $_POST['id_equipe']);

	$sql = "DELETE FROM equipes WHERE id_equipe = '$id_equipe'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../consultar_equipe.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../consultar_equipe.php');
	endif;
endif;