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
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$email = clear($_POST['email']);	
	$curso_professor = clear($_POST['curso_professor']);
	$cpf = clear($_POST['cpf']);
	$senha = md5($_POST['senha']);

	$sql = "INSERT INTO professores (nome, sobrenome, email, curso_professor, cpf, senha) VALUES ('$nome', '$sobrenome', '$email', '$curso_professor', '$cpf', '$senha')";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../consultar_professor.php');
	else:
		$_SESSION['mensagem'] = "Erro: Professor já cadastrado";
		header('Location: ../consultar_professor.php');
	endif;
endif;