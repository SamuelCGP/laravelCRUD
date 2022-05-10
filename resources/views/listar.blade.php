<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Produtos</title>
    </head>
    <body>
        <div class="bar">
            <h1>Lista de Produtos</h1>
            <h1 onclick="location.href='/'" style="margin-left: auto; cursor: pointer">Voltar</h1>
        </div>
        <div class="container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Estoque</th>
                    <th>Ação</th>
                </tr>
                <?php
                    foreach ($produtos as $key => $reg) {
                        $id = $reg["id"];
                        $nome = $reg["nome"];
                        $valor = $reg["valor"];
                        $estoque = $reg["estoque"];
                        echo "
                        <tr>
                            <td>$id</td>
                            <td>$nome</td>
                            <td>$valor</td>
                            <td>$estoque</td>
                            <td class='buttonCell'>
                                <button class='actionButton primary' onclick='location.href=`/editar-produto/$id`'>Editar</button>
                                <br>
                                <button class='actionButton danger' onclick='confirm(`$nome excluído`); location.href=`/excluir-produto/$id;`'>Excluir</button>
                            </td>
                        </tr>";
                    }
                ?>
                
            </table>
        </div>
    </body>
    <style>
        html{
            height: 100%;
        }
        body {
            font-family: 'Nunito', sans-serif;
            height: 100%;
            margin: 0
        }
        h1{
            margin: 0.67em
        }
        .bar {
            display: flex;
            background-color: white;
            position: absolute;
            top: 0;
            width: 100%;
        }
        .container {
            display:flex;
            flex-direction: column;
            height: 100%;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(130deg, red, purple);
        }
        table{
            width: 50vw;
        }
        th{
            outline: 2px solid black;
            background-color: white;
        }
        td{
            background-color: #F5BCBE;
            outline: 2px solid #D7454A;
        }
        .buttonCell{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .actionButton{
            height: 30px;
            border: none;
            color: white;
            font-weight: bold;
        }
        .actionButton.danger{
            background-color: #B61A1A;
        }
        .actionButton.danger:hover{
            background-color: darkred;
        }
        .actionButton.primary{
            background-color: purple;
        }
        .actionButton.primary:hover{
            background-color: #571772;
        }
    </style>
</html>