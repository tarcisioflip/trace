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
	$titulo = clear($_POST['titulo']);
	$area_do_conhecimento = clear($_POST['area_do_conhecimento']);	

	$sql = "INSERT INTO cursos (titulo, area_do_conhecimento) VALUES ('$titulo', '$area_do_conhecimento')";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Curso cadastrado com sucesso!";
		header('Location: ../consultar_curso.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../consultar_curso.php');
	endif;
endif;