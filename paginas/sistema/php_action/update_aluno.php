<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$rgm = mysqli_escape_string($conn, $_POST['rgm']);
	$nome = mysqli_escape_string($conn, $_POST['nome']);
	$sobrenome = mysqli_escape_string($conn, $_POST['sobrenome']);
	$email = mysqli_escape_string($conn, $_POST['email']);	
	$cpf = mysqli_escape_string($conn, $_POST['cpf']);	
	$turma_aluno = mysqli_escape_string($conn, $_POST['turma_aluno']);
	$curso_aluno = mysqli_escape_string($conn, $_POST['curso_aluno']);
	$senha = mysqli_escape_string($conn, $_POST['senha']);


	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "UPDATE alunos SET rgm = '$rgm', nome = '$nome', sobrenome = '$sobrenome', email = '$email', cpf = '$cpf',curso_aluno = '$curso_aluno', turma_aluno = '$turma_aluno', senha = md5('$senha') WHERE id = '$id'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../consultar_aluno.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../consultar_aluno.php');
	endif;
endif;