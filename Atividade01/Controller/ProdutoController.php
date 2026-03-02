<?php

session_start();
require_once "./Model/\ProdutoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/produtoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $preço = $_POST['preço'];
        $quantidade = $_POST['quantidade'];
        $validade = $_POST['validade'];

        $produto = new Produto($nome, $preço, $quantidade, $validade);
        $produto->salvar();
        header('Location: /PB_PHP/Atividade01/produto/telaCadastro');
        exit;
    }
    
    // Estou Na ProdutoController.php
    public function listarProdutos(){
        // retornar a lista de produtos
        $produtos = Produto::listar();
        echo "<pre>";
        print_r($produtos);
        echo "</pre>";
        require 'View/produtoListar.php';
    }

    public function telaEditar() {
        $produto = Produto::buscar($_GET['id']);
        require 'View/produtoEditar.php';
    }

     public function atualizar(){
        $produto = new Produto($_POST['nome'], $_POST['preço'], $_POST['quantidade'], $_POST['validade']);
        $produto->atualizar($_GET['id']);
        header('Location: /PB_PHP/Atividade01/produto/telaEditar?id=' .($_GET['id']));
        exit;
    }

    public function excluir(){
        Produto::excluir($_GET['id']);
        header('Location: /PB_PHP/Atividade01/produto/listar');
        exit;
    }
}
?>