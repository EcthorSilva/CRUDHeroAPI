<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$realname = mysqli_escape_string($connection,$_POST['realname']);
		$teamaffiliation = mysqli_escape_string($connection,$_POST['teamaffiliation']);
		$rating = mysqli_escape_string($connection,$_POST['rating']);
		$id = mysqli_escape_string($connection,$_POST['id']);

		$sql = "INSERT INTO tbherois(nome,realname,teamaffiliation,rating)
		VALUES('$nome','$realname','$teamaffiliation','$rating')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";
			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";
			header('Location: ../index.php');	
		}
	}
