<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Empresa</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
	    <a type="submit" href="http://localhost/projetocrud/index.php" class="btn-close btn-close-white" aria-label="Close"></a>
	</nav>
    <form name="cad-empresa" method="POST" action="http://localhost/projetocrud/cadempresa.php">
        <input type="text" name= "empresa" class="form-control" placeholder="Nome da Empresa" aria-label="First name">
        <br>    
        <center><input type="submit" class="btn btn-success"></center>
        <br>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
        