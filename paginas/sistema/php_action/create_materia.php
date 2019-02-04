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
	
	$titulo_materia = clear($_POST['titulo_materia']);
	$carga_horaria = clear($_POST['carga_horaria']);	

	$sql = "INSERT INTO materias (titulo_materia, carga_horaria) VALUES ('$titulo_materia', '$carga_horaria')";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Matéria cadastrada com sucesso!";
		header('Location: ../consultar_materia.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../consultar_materia.php');
	endif;
endif;