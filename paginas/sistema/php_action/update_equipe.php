<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):

	$titulo_equipe = mysqli_escape_string($conn, $_POST['titulo_equipe']);	
	$nota_equipe = mysqli_escape_string($conn, $_POST['nota_equipe']);


	$rgm1 = mysqli_escape_string($conn, $_POST['rgm1']);
	$nome1 = mysqli_escape_string($conn, $_POST['nome1']);
	$nota_aluno1 = mysqli_escape_string($conn, $_POST['nota_aluno1']);

	$rgm2 = mysqli_escape_string($conn, $_POST['rgm2']);
	$nome2 = mysqli_escape_string($conn, $_POST['nome2']);
	$nota_aluno2 = mysqli_escape_string($conn, $_POST['nota_aluno2']);

	$rgm3 = mysqli_escape_string($conn, $_POST['rgm3']);
	$nome3 = mysqli_escape_string($conn, $_POST['nome3']);
	$nota_aluno3 = mysqli_escape_string($conn, $_POST['nota_aluno3']);

	$rgm4 = mysqli_escape_string($conn, $_POST['rgm3']);
	$nome4 = mysqli_escape_string($conn, $_POST['nome3']);
	$nota_aluno4 = mysqli_escape_string($conn, $_POST['nota_aluno3']);

	$rgm5 = mysqli_escape_string($conn, $_POST['rgm4']);
	$nome5 = mysqli_escape_string($conn, $_POST['nome4']);
	$nota_aluno5 = mysqli_escape_string($conn, $_POST['nota_aluno4']);

	$anexo = mysqli_escape_string($conn, $_POST['anexo']);


	$id_equipe = mysqli_escape_string($conn, $_POST['id_equipe']);


	$sql = "UPDATE equipes SET 
	titulo_equipe = '$titulo_equipe', 	
	nota_equipe = '$nota_equipe', 

	rgm1 = '$rgm1', 
	nome1 = '$nome1', 
	nota_aluno1 = '$nota_aluno1', 

	rgm2 = '$rgm2', 
	nome2 = '$nome2', 
	nota_aluno2 = '$nota_aluno2', 

	rgm3 = '$rgm3', 
	nome3 = '$nome3', 
	nota_aluno3 = '$nota_aluno3', 

	rgm4 = '$rgm4', 
	nome4 = '$nome4', 
	nota_aluno4 = '$nota_aluno4', 

	rgm5 = '$rgm5', 
	nome5 = '$nome5', 
	nota_aluno5 = '$nota_aluno5', 

	anexo = '$anexo'

	WHERE id_equipe = '$id_equipe'";


	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../consultar_evento_professor.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../consultar_evento_professor.php');
	endif;
endif;