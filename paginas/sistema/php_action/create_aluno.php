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
	$rgm = clear($_POST['rgm']);
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$email = clear($_POST['email']);	
	$cpf = clear($_POST['cpf']);	
	$turma_aluno = clear($_POST['turma_aluno']);
	$curso_aluno = clear($_POST['curso_aluno']);
	$senha = md5($_POST['senha']);

	$sql = "INSERT INTO alunos (rgm, nome, sobrenome, email, cpf, curso_aluno, turma_aluno, senha) VALUES ('$rgm','$nome', '$sobrenome', '$email', '$cpf', '$curso_aluno', '$turma_aluno', '$senha')";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../consultar_aluno.php');
	else:
		$_SESSION['mensagem'] = "Erro: RGM já cadastrado";
		header('Location: ../consultar_aluno.php');
	endif;
endif;