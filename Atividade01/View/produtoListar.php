<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Listar Produtos</title>
    </head>
    <body>
        <h2>Produtos</h2>
        <a href="http://localhost/PB_PHP/Atividade01/produto/telaCadastro">Ir para tela de Cadastrar</a>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Validade</th>
            </tr>
            <?php foreach($produtos as $id => $p): ?>
                <tr>
                    <td><?= $p['nome']?></td>]
                    <td><?= $p['preço']?></td>
                    <td><?= $p['quantidade']?></td>
                    <td><?= $p['validade']?></td>
                    <td>
   <a href="/PB_PHP/Atividade01/produto/telaEditar?id=<?= $id ?>">
        Editar
    </a> 
    <a href="/PB_PHP/Atividade01/produto/excluir?id=<?= $id ?>">
        Excluir
    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
 </body>
 </html>



