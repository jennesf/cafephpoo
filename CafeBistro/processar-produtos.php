<?php
require "conexao.php";
require "modelo\produto.php";
require "Repositorio\ProdutoRepositorio.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];

    $produto = new Produto(0,
    $tipo,
    $nome,
    $descricao,
    $imagem,
    $preco);

    $produtoRepositorio = new ProdutoRepositorio($conn);
    $produtoRepositorio->cadastrar($produto);
    header("Location: cadastrar-produto-sucesso.php");
}

?>