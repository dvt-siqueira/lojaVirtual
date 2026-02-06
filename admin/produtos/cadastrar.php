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
    </body>
        
</html>