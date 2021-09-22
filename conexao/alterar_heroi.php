<?php 
	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-alterar'])){
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$realname = mysqli_escape_string($connection,$_POST['realname']);
		$teamaffiliation = mysqli_escape_string($connection,$_POST['teamaffiliation']);
		$rating = mysqli_escape_string($connection,$_POST['rating']);
		$id = mysqli_escape_string($connection,$_POST['id']);

		$sql = "UPDATE tbherois SET nome= '$nome', realname = '$realname', teamaffiliation = '$teamaffiliation', rating = '$rating',  WHERE id = '$id'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";
			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";
			header('Location: ../index.php');	
		}
	}
?>
