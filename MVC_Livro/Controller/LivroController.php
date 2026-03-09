<?php
session_start();

require_once 'Model/LivroModel.php';

class LivroController{
    public function telaCadastro(){
        require 'View/LivroCadastrar.php';
    }

    public function conectar(){
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano_publicacao = $_POST['ano_publicacao'];
        $editora = $_POST['editora'];

        $livro = new Livro($id, $titulo, $autor, $ano_publicacao, $editora);
        $livro->salvar();

        header('Location: /PB_PHP/MVC_Livro/livro/telaCadastro');
        exit;
    }

    public function inserirLivros(){
        $livros = Livro::inserir();
        echo '<pre>';
        print_r($livros);
        echo '</pre>';
        require 'View/livroListar.php';
    }

    public function telaEditar(){
        $livro = Livro::selecionar($_GET['id']);
        require 'View/livroEditar.php';
    }

    public function atualizar(){
        $livro = new Livro($_GET['id']);
        $livro->atualizar($_GET['id']);
        header('Location: /PB_PHP/MVC_Livro/livro/telaEditar?id=1' .($_GET['id']));
        exit;
    }

    public function deletar(){
        Livro::deletar($_GET['id']);
        header('Location: /PB_PHP/MVC_Livro/livro/listar');
        exit;

        
    }
}
?>