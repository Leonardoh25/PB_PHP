<?php

session_start();
require_once "./Model/\UsuarioModel.php";

class UsuarioController{
    
    public function telaCadastro(){
        require "View/UsuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario->salvar();
        header('Location: /PB_PHP/MVC_Exemplo/usuario/telaCadastro');
        exit;
    }

    // ESTOU NA UsuariController.php
    public function listarUsuarios(){
        // retorna a lista de usuarios
        $usuarios = Usuario::listar();
        echo "<pre>";
        print_r($usuarios);
        echo "</pre>";
        require 'View/usuarioListar.php';
        
    }
}