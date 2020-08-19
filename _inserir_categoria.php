<?php

include 'conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO categoria (categoria) values ('$categoria')";
$inserir = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<div class="container" style="width:400px">
	<center>
		<h3>Categoria cadastrada com sucesso</h3>
		<div style="margin-top: 10px">
			<a href="adicionar_categoria.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
		</div>
	</center>