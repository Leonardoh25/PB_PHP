<?php

class Usuario{
    private $nome;
    private $email;

    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }

    public function salvar(){
        if(!isset($_SESSION['usuarios'])){
            $_SESSION['usuarios'] = [];
        }

        $_SESSION['usuarios'][] = [
            'nome' =>$this->nome,
            'email' =>$this->email
        ];
    }

    // ESTOU NA UsuaioController.php
    public static function listar(){
        // retornar a lista de usuarios
        return $_SESSION['usuarios'] ?? [];
    }

    // ESTOU NA UsuarioModel.php
    public static function buscar($id){
        // select * from usuarios where id = $id;
        return $_SESSION['usuarios'] [$id] ?? null; 
    }

    public static function atualizar($id){
        if(isset($_SESSION['usuarios'][$id])){ // verificar se o usuario  existe
            $_SESSION['usuarios'][$id] = [ // atualizar com novos dados 
                'nome' => $this->nome,
                'email' => $this->email
            ];
        }
    }

    
}
?>