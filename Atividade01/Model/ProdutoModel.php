<?php

class Produto{
    private $nome;
    private $preço;
    private $quantidade;
    private $validade;

    public function __construct($nome, $preço, $quantidade, $validade){
        $this->nome = $nome;
        $this->preço = $preço;
        $this->quantidade = $quantidade;
        $this->validade = $validade;
    }

    public function salvar(){
        if(!isset($_SESSION['produto'])){
            $_SESSION['produto'] = [];
        }

        $_SESSION['produto'][] = [
            'nome' =>$this->nome,
            'preço' =>$this->preço,
            'quantidade' =>$this->quantidade,
            'validade' =>$this->validade
        ];

    }

    // ESTOU NA ProdutoController.php
    public static function listar(){
        // retornar a lista de produtos
        return $_SESSION['produto'] ??[];
    
    }

     // ESTOU NA ProdutoModel.php
    public static function buscar($id){
        // select * from produtos where id = $id;
        return $_SESSION['produto'] [$id] ?? null; 
    }

      public function atualizar($id){
        if(isset($_SESSION['produto'][$id])){ // verificar se o produto  existe
            $_SESSION['produto'][$id] = [ // atualizar com novos dados 
                'nome' => $this->nome,
                'preço' => $this->preço,
                'quantidade' => $this->qualidade,
                'validade' => $this->validade
            ];
        }
    }

    public static function excluir($id){
        if(isset($_SESSION['produto'][$id])){ // verificar se o produto existe
            unset($_SESSION['produto'][$id]); // remover o produto
        }
    }

 
}
?>