<?php
require_once 'conexao/conexao.php';
include_once 'includes/header.php';

if (isset($_GET['id'])) {
	$id = mysqli_escape_string($connection, $_GET['id']);
	$sql = "SELECT * FROM tbherois WHERE codPro = '$id'";
	$resultado = mysqli_query($connection, $sql);
	$dados = mysqli_fetch_array($resultado);
}
?>

<div class="row">
	<div class="col s12 m6 push-m3">

		<h3 class="light">Alterar Herói</h3>

		<form action="conexao/alterar_heroi.php" method="POST">

			<input type="hidden" name="codPro" value="<?php echo $dados['codPro']; ?>">

			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
				<label for="nome">Nome do Heroi</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="realname" id="realname" value="<?php echo $dados['realname']; ?>">
				<label for="realname">Nome real do heroi</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="rating" id="rating" value="<?php echo $dados['rating']; ?>">
				<label for="rating">Avaliação</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="teamaffiliation" id="teamaffiliation" value="<?php echo $dados['teamaffiliation']; ?>">
				<label for="teamaffiliation">Afiliação da equipe</label>
			</div>

			<button type="submit" name="btn-alterar" class="btn purple darken-4">Alterar</button>
			<a href="index.php" class="btn green">Lista de herois</a>
		</form>
	</div>
</div>

<?php
include_once 'includes/footer.php';
?>