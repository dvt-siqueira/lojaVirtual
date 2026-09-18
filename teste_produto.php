<?php
require_once 'models/produtos.php';
echo "<h2>Teste de Produto</h2>";
$p1 = new Produto("Teclado",150,"RGB Switch Blue","teclado.jpg",1);
echo "Produto: " . $p1->getNome() . "<br>";
echo "Preço: R$" . number_format($p1->getPreco(),2,',','.') . "<br>";
$pBusca = Produto::buscarPorId(16);
var_dump($pBusca);

?>