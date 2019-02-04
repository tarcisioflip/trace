<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($conn, $_POST['nome']);
	$sobrenome = mysqli_escape_string($conn, $_POST['sobrenome']);
	$email = mysqli_escape_string($conn, $_POST['email']);		
	$curso_professor = mysqli_escape_string($conn, $_POST['curso_professor']);
	$cpf = mysqli_escape_string($conn, $_POST['cpf']);
	$senha = mysqli_escape_string($conn, $_POST['senha']);

	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "UPDATE professores SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', curso_professor = '$curso_professor', cpf = '$cpf', senha = md5('$senha') WHERE id = '$id'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../consultar_professor.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../consultar_professor.php');
	endif;
endif;