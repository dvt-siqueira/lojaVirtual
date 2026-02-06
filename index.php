<html>
    <head>
        <Title>Minha Loja Virtual</Title>
    </head>
    <body>
        <h1>Bem-vindo à nossa Loja Virtual!</h1>
       <?php
        echo "Bem-vindo á nossa loja virtual!";
       ?>
       <p>
        Acesso realizado às:
        <?php echo date("H:i:s");
        $nomeLoja = "3C Loja Virtual";
        echo "<p> Bem-vindo à " . $nomeLoja . " venha comprar <p>";
        ?>

        <form method="get">
            <input type="text" name="nome">
            <button type="submit">Entrar</button>
        </form>
        <?php
        if (isset($_GET['nome'])) {
            echo "Ola, " . $_GET['nome']. " Seja bem-vindo(a)!";
        }
        ?>
       </p>
       <a href="admin/produtos/cadastrar.php">Cadastrar Produto</a>
    </body>
</html>