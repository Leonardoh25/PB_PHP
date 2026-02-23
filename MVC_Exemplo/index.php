<?php

require_once "Controller/UsuarioController.php";

$usuarioController = new UsuarioController();
$router = $_GET["route"] ?? '';

switch ($router) {
    case 'usuario/telaCadastro':
        $usuarioController->telaCadastro();
        break;
    
    case 'usuario/salvar':
        $usuarioController->cadastrar();
        break;
    // ESTOU no Index.php
    case "usuario/listar":
        $usuarioController->listarUsuarios();
        break;

    default:
        echo "Pagina Não encontrada";
        break;
}

?>
