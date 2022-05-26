<?php

use LDAP\Result;

  include_once 'conexao.php';
  //select da categoria
  $conect = new conexao();
  $conect->conectar();
  //$sqlselect = "SELECT * FROM produtos WERE id=$id";
  //$result = $conect->getPdo->query($sqlselect);
  $conect->getPdo()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $selec = $conect->getPdo()->prepare("SELECT * FROM produtos ORDER BY id DESC");
  $selec->execute();
  if ($selec->rowCount() > 0) {
    $dados = $selec->fetchAll(PDO::FETCH_ASSOC);
  }
  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>crud</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <ul class=navbar-nav me-auto mb-2 mb-lg-0>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cadastro.php">Cadastro de produtos</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categoria.php">Cadastro de Categorias</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="empresa.php">Cadastro de Empresas</a></li>
        </li>
    </nav>    
    <div class="m-5">
      <table class="table" method="POST">
        <thead class="table-dark">
          <tr>
            <th scope="col">Produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Empresa</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Peso</th>
            <th scope="col">Valor Varejo</th>
            <th scope="col">Valor promoção</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?
              foreach ($dados as $dado) 
              {
                echo "<tr>";
                echo "<td>".$dado['id']."</td>";
                echo "<td>".$dado['name']."</td>";
                echo "<td>".$dado['categorie']."</td>";
                echo "<td>".$dado['company']."</td>";
                echo "<td>".$dado['weight']."</td>";
                echo "<td>".$dado['retail_price']."</td>";
                echo "<td>".$dado['promotion_price']."</td>";
                echo "<td> 
                  <a class = 'btn btn-sm btn-primary' href='cadastro.php?id=$dado[id]'> 
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                    </svg>
                <td>";
                echo "</tr>";
              }
              ?>
              </div>
      
          </tr>
        </tbody>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>