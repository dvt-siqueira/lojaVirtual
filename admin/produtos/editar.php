<?php
require_once '../../config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare(
        "SELECT * FROM produtos WHERE id = :id"
    );
    $stmt->execute(['id' => $id]);
    $p = $stmt->fetch();
    if (!$p) {
        die("Produto não encontrado.");
    }
}
?>

<html>

<head>
    <title>Editar Produto</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="container">
        <h1>Editar Produto</h1>
        <form action="atualizar.php" method="POST">
            <!-- Campo oculto para enviar o ID -->
            <input type="hidden" name="id" value="<?php echo $p['id']; ?>">

            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $p['nome']; ?>" required>

            <label>Preço:</label>
            <input type="number" step="0.01" name="preco" value="<?php echo $p['preco']; ?>" required>

            <label>Quantidade:</label>
            <input type="number" name="quantidade" value="<?php echo $p['quantidade']; ?>" required>
            
            <label>Descrição:</label>
            <textarea name="descricao" required><?php echo $p['descricao']; ?></textarea>

            <button type="submit">Salvar Alterações</button>
            <a href="listar.php">Cancelar</a>
        </form>
    </div>
</body>

</html>