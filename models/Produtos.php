<?php
require_once '../config.php';
require_once '../admin/produtos/functions.php';

class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    // Método: Formatar o preço para a tela
    public function exibirPreco() {
        return "R$ " . number_format($this->preco, 2, ',', '.');
    }

    // Método: Gerar link de venda para WhatsApp
    public function gerarLinkWhatsApp() {
        $texto = "Olá! Tenho interesse no " . $this->nome . " que custa " . $this->exibirPreco();
        return "https://wa.me/5511999999999?text=" . urlencode($texto);
    }

     public static function buscarPorId($id, $pdo) {
        $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$dados) return null;

        // A MÁGICA: Criamos o objeto e preenchemos ele aqui dentro!
        $p = new Produto();
        $p->id = $dados['id'];
        $p->nome = $dados['nome'];
        $p->preco = $dados['preco'];
        $p->quantidade = $dados['quantidade'];
        $p->descricao = $dados['descricao'];

        return $p; 
    }

}
// 1. Criamos um objeto novo (Instanciamos)
$p1 = new Produto();

// 2. Preenchemos os dados
$p1->nome = "Monitor Gamer";
$p1->preco = 1200.00;

// 3. Usamos a "inteligência" dele
echo('<html> <head><title>Produtos</title><link rel="stylesheet" type="text/css" href="../css\style.css"></head><body>');
exibirnavbar();
echo('<div class="container">');
echo ($p1->exibirPreco() . '<br>');
echo "<a href='" . $p1->gerarLinkWhatsApp() . "'>Comprar</a><br><br>";

$meuProduto = Produto::buscarPorId(4, $pdo);
echo ("Nome: " . $meuProduto->nome); // Monitor Gamer
echo "<br>";
echo ("Quantidade: " . $meuProduto->quantidade); // 10
echo "<br>";
echo ("Preço: " . $meuProduto->exibirPreco()); // Tudo em uma linha!
echo "<br>";
echo "<a href='" . $meuProduto->gerarLinkWhatsApp() . "'>Comprar</a><br><br>";
echo('</div>');
echo('</body></html>');
?>
