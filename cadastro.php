<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <title>CRUD com PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>	
<body>
    <form class="row g-3" action= "http://localhost/produto.php" method="POST">
		<div class="row g-3">
			<div class="col">
			  <input type="text" name= "nome" class="form-control" placeholder="Nome do produto" aria-label="First name">
			</div>
			<div class="col">
				<input type="text" name ="categoria" class="form-control" placeholder="Categoria" aria-label="First name">
			</div>
			<div class="col">
				<input type="text" name = "companhia" class="form-control" placeholder="Companhia" aria-label="First name">
			</div>
			<div class="col-sm">
				<input type="text" name = "quantidade" class="form-control" placeholder="Quantidade" aria-label="State">
			</div>
			<div class="col-sm">
				<input type="text" name = "peso" class="form-control" placeholder="Peso" aria-label="State">
			</div>
			<div class="col-sm">
				<input type="text" name = "precovarejo" class="form-control" placeholder="Preço varejo" aria-label="State">
			</div>
			<div class="col-sm">
				<input type="text" name = "precopromo" class="form-control" placeholder="Preço promoção" aria-label="State">
			</div>
			<input type="submit" class="btn btn-success">
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
