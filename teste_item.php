<?php
require_once 'models/produtos.php';
require_once 'models/ItemCarrinho.php';

echo "<h2> Teste item</h2>";
$p1 = new Produto("Mouser",150.00,"16000 DPI","mouse.jpg",2);
$item = new ItemCarrinho($p1,3);

echo "Produto: ". $item->getProduto()->getNome() . "<br>";
echo "Quantidade: ". $item->getQuantidade(). "<br>";
echo "Preço: R$ ". $item->getProduto()->getPreco(). "<br>";
echo "<strong>Subtotal: R$ " . $item->getSubtotal() .  "</strong>";
?>