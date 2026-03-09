<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar Livro</h2>
    <a href="/PB_PHP/MVC_Livro/livro/listar">Ir para a tela Listar</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>" disabled>
        <input type="text" name="id" valeu="<?= htmlspecialchars($livro['ID'])?>" require>
        <input type="text" name="titulo" valeu="<?= htmlspecialchars($livro['TITULO'])?>" require>
        <input type="text" name="autor" valeu="<?= htmlspecialchars($livro['AUTOR'])?>" require>
        <input type="text" name="ano_publicacao" valeu="<?= htmlspecialchars($livro['ANO_PUBLICACAO'])?>" require>
        <input type="text" name="editora" valeu="<?= htmlspecialchars($livro['EDITORA'])?>" require>
        <button type="submit">Editar</button>
    </form>   
</body>
</html>