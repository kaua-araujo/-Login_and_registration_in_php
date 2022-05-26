<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<?php
    require_once 'conexao.php';
    //classe do cadastro da empresa
    class empresa
    {
        private $nome;
        private conexao $conection;
        //construction
        function empresa()
        {
            $this->nome = $_POST['empresa'];
            $this->conection = new conexao;
        }
        public function cadastroEmpresa()
        {
            if(empty($_POST['empresa'])) {
                echo"
                <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
                <symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>
                <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                </symbol>
                </svg>
                <div class='alert alert-warning d-flex align-items-center' role='alert'>
                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Warning:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                <div>
                    Campo Empresa obrigatório!
                </div>
                </div>";
                ?>
                <button type="button" class="btn btn-warning" href="empresa.php">Voltar</button>
                <?
            } else {
            try {
                $this->conection->conectar();
                $this->conection->getPdo()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO empresa (nome) VALUES (?)";
                $stmt= $this->conection->getPdo()->prepare($sql);
                $stmt->execute([$this->nome]);
            } catch(PDOException $e) 
            {
                 echo 'ERROR: ' . $e->getMessage();
            }
            }
        }    
    }
    $new = new empresa();
    $new->cadastroEmpresa();
?><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>