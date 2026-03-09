<?php

require_once "Controller/LivroController.php";

$livroController = new LivroController();
$router = $_GET['route'] ?? '';

switch($router){
    case 'livro/telaCadastro':
    $livroController->telaCadastro();
    break;

    case 'livro/salvar':
        $livroController->conectar();
        break;

    case 'livro/inserir':
        $livroController->listarLivros();
        break;
    
    case 'livro/telaEditar':
        $livroController->telaEditar();
        break;

    case 'livro/atualizar':
        $livroController->atualizar();
        break;

    case 'livro/deletar':
        $livroController->deletar();
        break;

    default:
    echo"Pafina não encontrada";
    break;
}
?>