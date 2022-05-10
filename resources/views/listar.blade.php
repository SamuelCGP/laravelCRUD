<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Produtos</title>
    </head>
    <body>
        <h1>Produtos</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Estoque</th>
                <th>Ação</th>
            </tr>
            <?php
                $id = $produtos[0]["id"];
                $nome = $produtos[0]["nome"];
                $valor = $produtos[0]["valor"];
                $estoque = $produtos[0]["estoque"];
                echo "
                <tr>
                    <td>$id</td>
                    <td>$nome</td>
                    <td>$valor</td>
                    <td>$estoque</td>
                    <td>
                        <button class='sideToSide' onclick='location.href=`/editar-produto/$id`'>Listar</button>
                        <button class='sideToSide' onclick='location.href=`/excluir-produto/$id`'>Excluir</button>
                    </td>
                </tr>";
            ?>
            
        </table>
    </body>
</html>