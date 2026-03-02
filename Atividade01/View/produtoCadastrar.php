<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulario Produto</title>
    </head>
    <body>
        <a href="listar">Ir para a tela Listar</a>
        <form method="POST" action="salvar">
            <input type="text" name="nome" placeholder="Nome do produto" require>
            <input type="text" name="preço" placeholder="Preço do produto" require>
            <input type="text" name="quantidade" placeholder="Quantidade" require>
            <input type="date" name="validade" placeholder="Data de validade" require>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>