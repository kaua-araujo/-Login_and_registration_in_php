<?php     
    require_once 'conexao.php';
    class produto{
        private $nome;
        private $categria;
        private $companhia;
        private $quantidade;
        private $peso;
        private $precovarejo;
        private $precopromo;
        private conexao $conexao;
    //contruction
     public function produto(){
        $nome = $_POST['nome'];
        $categria = $_POST['categoria'];
        $companhia = $_POST['companhia'];
        $quantidade = $_POST['quantidade'];
        $peso = $_POST['peso'];
        $precovarejo = $_POST['precovarejo'];
        $precopromo = $_POST['precopromo'];
        $this->conexao = new conexao();

        return new produto();
    }
    
     public function criarProduto(){
         echo "<span>Entrou aqui</span>";
        $this->conexao->conectar();
        try{
            $a = new produto();
            $a->conexao->pdo->prepare("INSERT INTO produtos (name,categorie,company,quantity,weight,retail_price,promotion_prince) VALUES(:nome,:categoria,:companhia,:quantidade,:peso,:precovarejo,:precopromo)");
            $a->criarProduto();
        }catch (PDOException $erros){
            die("Erro: <code>" . $erros->getMessage() . "</code>");
        }
     }
    }
?>