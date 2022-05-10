<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produtos</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="bar">
            <h1>Cadastrar Produto</h1>
            <h1 onclick="location.href='/'" style="margin-left: auto; cursor: pointer">Voltar</h1>
        </div>
        <div class="container">
            <form action="/cadastrar-produto" method="POST">
                @csrf
                <div class="formRow">
                    <label for="lblNome">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <br>
                <div class="formRow">
                    <label for="lblValor">Valor:</label>
                    <input type="text" name="valor">
                </div>
                <br>
                <div class="formRow">
                    <label for="lblQuantidade">Quantidade:</label>
                    <input type="text" name="estoque">
                </div>
                <br>
                <div class="formRow">
                    <button class="buttonRegister">Cadastrar</button>
                </div>
            </form>
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
        form{
            display: flex;
            flex-direction: column;
            background-color: white;
            border: 50px solid white;
        }
        .formRow {
            display: table-row;
        }
        label{
            float: left;
            font-size: 20px;
            font-weight: bold;
            margin-right: 30px;
        }
        input{
            float: right;
            height: 100%;
            border-radius: 5px;
            outline: none;
            border: none;
            text-align: center;
            outline: 1px solid black;
            box-shadow: 0 3px 10px #DCA6A8;
        }
        input:focus{
            outline: 3px solid #FF7F85;
            background-image: linear-gradient(#F9CCCF, white);
        }
        .buttonRegister {
            width: 100%;
            height: 100%;
            background-color: red;
            border: none;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }
        .buttonRegister:hover{
            background-color: darkred;
        }
        
    </style>
</html>