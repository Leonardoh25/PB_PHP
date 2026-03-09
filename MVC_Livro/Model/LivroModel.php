<?php


require_once "./database/Database.php";

class Livro{
    private $id;
    private $titulo;
    private $autor;
    private $ano_publicacao;
    private $editora;

    public function __construct($id, $titulo, $autor, $ano_publicacao, $editora){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_publicacao = $ano_publicacao;
        $this->editora = $editora;
    }

    public function conectar(){
        $pbo = Database::conectar();
        $sql = "INSERT INTO livros (id, titulo, autor, ano_publicacao, editora) VALUES (:id, :titulo, :autor, :ano_publicacao, :editora)";
        $stmt = $pbo->prepare($sql);
        $stmt->execute(['id' => $this->id, 'titulo' => $this->titulo, 'autor' => $this->autor, 'ano_publicacao' => $this->ano_publicacao, 'editora' => $this->editora]);
    }

    public static function inserir(){
        $pdo = Database::conectar();
        $stmt = $pdo->query("SELECT * FROM livros");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function selecionar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("SELECT * FROM livros WHERE id = :id");
        $stmt->execute(['id'=> $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("UPDATE livros SET nome = :nome, email = :email WHERE id = :id");
        $stmt->execute(['id' => $id, 'titulo' => $this->titulo, 'autor' => $this->autor, 'ano_publicacao' => $this->ano_publicacao, 'editora' => $this->editora]);
    }
    
    public static function deletar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("DELETE FROM livros WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
    
}


?>