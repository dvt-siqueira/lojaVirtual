<html>
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <Title>Produto Salvo</Title>
</head>

<body>
    <div class="container">
        <h1 id="sucesso">Produto Salvo com Sucesso!</h1>
        <?php
        require_once "../../config.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //recebe os dados do formulário
            $nome = $_POST["nome"];
            $preco = $_POST["preco"];
            $descricao = $_POST["descricao"];

            $sql = "INSERT INTO produtos (nome, preco, descricao)
            VALUES (:nome, :preco, :descricao)";
            $stmt = $pdo->prepare($sql);

            //Executa a comando usando os dados do formulário
            try {
                $stmt->execute([
                    ':nome' => $nome,
                    ':preco' => $preco,
                    ':descricao' => $descricao
                ]);
                $mensagem = "Produto '$nome' salvo com sucesso!";
            } catch (PDOException $e) {
                $mensagem = "Erro ao salvar o produto: " . $e->getMessage();
            }
        }
        ?>
        <h1><?php echo $mensagem; ?></h1>
    </div>


</body>
</html>