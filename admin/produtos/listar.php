<html>
    <head>
        <link rel="stylesheet" href="../../css/style.css">
        <Title>Lista de Produtos</Title>
    </head>
    <body>
        <?php
        $produtos =[
            ["id"=>1,"nome"=>"Fone", "preco"=>150.00, "estoque"=>20],
            ["id"=>2,"nome"=>"Teclado", "preco"=>200.00, "estoque"=>25],
            ["id"=>3,"nome"=>"Mouse", "preco"=>100.00, "estoque"=>1]
            ];
        echo "<h1>Lista de Produtos</h1>";
        if (!empty($produtos)) {
                echo "<table>";
                echo "<thead><tr><th>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th></tr></thead>";
                echo "<tbody>";
                foreach ($produtos as $produto) {
                    echo "<tr>";
                    echo "<td>" . $produto["id"] . "</td>";
                    echo "<td>" . htmlspecialchars($produto["nome"]) . "</td>";
                    echo "<td>R$ " . number_format($produto["preco"], 2, ',', '.') . "</td>";
                    echo "<td>" . $produto["estoque"] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>Nenhum produto cadastrado.</p>";
            }

            
        ?>
        
    </body>
</html>