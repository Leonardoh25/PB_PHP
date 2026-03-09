<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <h2>Livros</h2>
    <a href="/PB_PHP/MVC_Livro/livro/telaCadastro">Ir para tela de Cadastro</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Ano_Publicacao</th>
            <th>Editora</th>
        </tr>
        <?php foreach($livros as $id => $l): ?>
            <tr>
                <td><?= $l['ID']?></td>
                <td><?= $l['AUTOR']?></td>
                <td><?= $l['TITULO']?></td>
                <td><?= $l['ANO_PUBLICACAO']?></td>
                <td><?= $l['EDITORA'] ?></td>
                <td>
    <a href="/PB_PHP/MVC_Livro/livro/telaEditar?id=1<?= $l['ID'] ?>">
        Editar
    </a> 
    <a href="/PB_PHP/MVC_Livro/livro/deletar?id=<?= $l['ID'] ?>">
        Deletar
    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
 </body>
 </html>