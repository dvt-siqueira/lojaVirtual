<?php
require_once __DIR__ . '/../config.php';

class Produto
{
    public $id;
    public $nome;
    public $preco;
    public $quantidade;
    public $descricao;
    public $foto; // Novo atributo para armazenar o caminho da foto

    public function fazerUpload($arquivo)
    {
        // 1. Definimos o destino e geramos um nome único usando md5 e uniqid
        $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
        $novoNome = md5(uniqid()) . "." . $extensao;

        // Importante: a barra / no final garante que o arquivo vai para dentro do diretório
        $diretorio = "../../assets/img/produtos/";
        $tiposPermitidos = ['jpg', 'jpeg', 'png', 'webp'];
        if (!in_array(strtolower($extensao), $tiposPermitidos)) {
            return false; // Tipo de arquivo não permitido
        }

        // 3. Movemos o arquivo da pasta temporária do PHP para a pasta final do servidor
        if (move_uploaded_file($arquivo['tmp_name'], $diretorio . $novoNome)) {
            $this->foto = $novoNome; // Salva o nome gerado no atributo do objeto
            return true;
        }
        return false;
    }
}
