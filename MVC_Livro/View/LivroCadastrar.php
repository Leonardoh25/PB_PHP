<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cadastro</title>
</head>
<body>
    <a herf= "/PB_PHP/MVC_Livro/livro/listar">Ir para tela Listar</a>
    <form method="POST" action="salvar">
        <input type="text" id="id" placeholder="id" require>
        <input type="text" autor="autor" placeholder="Esse é o autor" require>
        <input type="text" titulo="titulo" placeholder="Esse é o titulo" require>
        <input type="text" ano_publicacao="ano_publicacao" placeholder="Ano de publicação" require>
        <input type="text" editora="editora" placeholder="Editora" require>
        <button type="submit">Enviar</button>
    </form> 
</body>
</html>