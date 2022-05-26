<?php     
    require_once 'conexao.php';
    //classe do produto
    class produto
    {
        private $nome;
        private $categoria;
        private $companhia;
        private $quantidade;
        private $peso;
        private $precovarejo;
        private $precopromo;
        private conexao $conection;
    //contruction
    public function produto()
    {
        $this->nome = $_POST['nome'];
        $this->categoria = $_POST['categoria'];
        $this->companhia = $_POST['companhia'];
        $this->quantidade = $_POST['quantidade'];
        $this->peso = $_POST['peso'];
        $this->precovarejo = $_POST['precovarejo'];
        $this->precopromo = $_POST['precopromo'];
        $this->conection = new conexao();
    }
     //método para criar produto
    public function criarProduto()
    {
        if(empty($_POST['nome'])) {
            echo "Campo Usuario obrigátorio!";
            if(!empty($_POST['categoria'])) {
                echo "Campo categoria obrigatório!";
                if(!empty($_POST['companhia'])) {
                    echo "Campo Empresa obrigatório!";
                    if(!empty($_POST['quantidade'])) {
                        echo "Campo empresa orbigatório!";
                        if(!empty($_POST['peso'])) {
                            echo "Campo Peso obrigatório!";
                            if(!empty($_POST['precovarejo'])) {
                                echo "Campo Preço em varejo obrigatorio!";
                                if(!empty($_POST['precopromo'])) {
                                    echo "Campo preco promoção obrigatório!";
                                }
                            }
                        }
                    }
                }
            }
        }
        else
        {
        try {
            $this->conection->conectar();
            $this->conection->getPdo()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO produtos (name,categorie,company,quantity,weight,retail_price,promotion_price) VALUES (?,?,?,?,?,?,?)";
            $stmt= $this->conection->getPdo()->prepare($sql);
            $stmt->execute([$this->nome, $this->categoria, $this->companhia, $this->quantidade,$this->peso,$this->precovarejo,$this->precopromo]);
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Cadastrado com sucesso!</strong> Verifique a lista de produtos!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" href="http://localhost/projetocrud/index.php"></button>
            </div>
            <?
        } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
        }
        }
    }
    public function listarProduto()
    {
        $conect = new conexao();
        $conect->conectar();
        $conect->getPdo()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $selec = $conect->getPdo()->prepare("SELECT * FROM produtos");
        $selec->execute();
    }
    public function editProduto()
    {
        $conect = new conexao();
        $conect->conectar();
        $conect->getPdo()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $id = $_GET['id'];
        $result = $conect->getPdo()->prepare("SELECT * FROM produtos WERE id=$id");
        $result->execute();
        print_r($result);
    }
    }
    $new = new produto();
    $new->criarProduto();
?>