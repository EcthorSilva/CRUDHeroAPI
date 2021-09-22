<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-excluir'])) {
				
		$id = mysqli_escape_string($connection,$_POST['id']);

		$sql = "DELETE FROM tbherois WHERE id = '$id'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Heroi excluido com sucesso.";
			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao excluir.";
			header('Location: ../index.php');	
		}
	}
