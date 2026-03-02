<?php

require_once "Controller/ProdutoController.php";

$produtoController = new ProdutoController();
$router = $_GET["route"] ?? '';

switch ($router) {
    case 'produto/telaCadastro':
        $produtoController->telaCadastro();
        break;

    case 'produto/salvar':
        $produtoController->cadastrar();
        break;
    // ESTOU np Index.php
    case "produto/listar":
        $produtoController->listarProdutos();
        break;

     case "produto/telaEditar":
        $produtoController->telaEditar();
        break;
    
    case "produto/atualizar":
        $produtoController->atualizar();
        break;

    case "produto/excluir":
        $produtoController->excluir();
        break;

    default:
        echo "Página Não encontrada";
        break;

}

?>