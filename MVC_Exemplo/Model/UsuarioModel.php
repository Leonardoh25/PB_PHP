<?php

class Usuario{
    private $nome;
    private $email;

    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }

    public function salvar(){
        if(!isset($_SESSION['usuario'])){
            $_SESSION['usuario'] = [];
        }

        $_SESSION['usuario'][] = [
            'nome' =>$this->nome,
            'email' =>$this->email
        ];
    }

    // ESTOU NA UsuaioController.php
    public static function listar(){
        // retornar a lista de usuarios
        return $_SESSION['usuarios'] ??[];
    }

    
}
?>