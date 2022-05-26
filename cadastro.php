<?php

use LDAP\Result;

include_once 'conexao.php';
//select da categoria
$conect = new conexao();
$conect->conectar();
$conect->getPdo()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$selec = $conect->getPdo()->prepare("SELECT * FROM cadcategoria");
$selec->execute();

if ($selec->rowCount() > 0) {
	$dados = $selec->fetchAll(PDO::FETCH_ASSOC);
}
//select de empresa
$empresa = $conect->getPdo()->prepare("SELECT * FROM empresa");
$empresa->execute();
if ($empresa->rowCount() > 0) {
	$result = $empresa->fetchAll(PDO::FETCH_ASSOC);
}
//edit
?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD com PHP</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>
	<body>
		<div class = "divcad">	
			<nav class="navbar navbar-dark bg-dark">
			<a type="submit" href="http://localhost/projetocrud/index.php" class="btn-close btn-close-white" aria-label="Close"></a>
		</nav>
		</div>
		<div class="row g-3">
		<form class="row g-3"  action="http://localhost/projetocrud/produto.php" method="POST">
			
				<div class="col">
					<input type="text" name="nome" class="form-control" placeholder="Nome do produto" value="$teste" aria-label="First name">
				</div>
				<div class="col">
					<select class="form-select"  name="categoria" aria-label="Default select example">
						<option selected>Categoria</option>
						<?php
						if ($selec->rowCount() > 0) {
							foreach ($dados as $dado) 
							{
								echo "<option value='{$dado['categoria']}'>{$dado['categoria']}</option>";
							}
						}
						?>
					</select>
				</div>
				<div class="col">
					<select class="form-select" name="companhia" aria-label="Default select example">
						<option selected>Empresa</option>
						<?php
						if ($selec->rowCount() > 0) {
							foreach ($result as $resul) 
							{
								echo "<option value='{$resul['nome']}'>{$resul['nome']}</option>";
							}
						}
						?>
					</select>
				</div>
				<div class="col-sm">
					<input type="text" name="quantidade" class="form-control" placeholder="Quantidade" aria-label="State">
				</div>
				<div class="col-sm">
					<input type="text" name="peso" class="form-control" placeholder="Peso" aria-label="State">
				</div>
				<div class="col-sm">
					<input type="text" name="precovarejo" class="form-control" placeholder="Preço varejo" aria-label="State">
				</div>
				<div class="col-sm">
					<input type="text" name="precopromo" class="form-control" placeholder="Preço promoção" aria-label="State">
				</div>
				<input type="submit" class="btn btn-success">
		</form>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>

</html>