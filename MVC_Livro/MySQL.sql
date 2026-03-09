create database mvc_livro;
use mvc_livro;

CREATE TABLE livros(
ID integer auto_increment primary key,
    TITULO varchar (255),
    AUTOR varchar (255),
    DATAPUBLICACAO varchar (255),
    EDITORA varchar (255)
);
SELECT * FROM livros;