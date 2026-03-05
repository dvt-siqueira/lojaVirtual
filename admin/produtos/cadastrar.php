<html>
    <head>
        <link rel="stylesheet" href="../../css/style.css">
        <Title>Minha Loja Virtual</Title>
    </head>
    <body>
        <form action="salvar.php" method="post">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="4"></textarea>
        <button type="submit">Salvar Produto</button>
    </form>


    <?php
    $contador = 1;
    while ($contador <= 5) {
        echo "Contagem: $contador <br>";
        $contador++;
    }
    for ($i = 1; $i <= 5; $i++) {
        echo "Iteração: " . $i . "<br>";
    }
$frutas=array("Maçã", "Banana", "Laranja");
echo  $frutas[2]; // Imprime "Maçã"

$frutas[] = "Morango";
echo $frutas[3]; // Imprime "Morango"
    ?>
    </body>
        
</html>