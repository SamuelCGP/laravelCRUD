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
        <h1>Cadastrar Produtos</h1>
    </div>
    <div class="container">
        <form action="/cadastrar-produto" method="POST">
            @csrf
            <label for="lblNome">Nome:</label>
            <input type="text" name="nome">
            <br><br>
            <label for="lblValor">Valor:</label>
            <input type="text" name="valor">
            <br><br>
            <label for="lblQuantidade">Quantidade:</label>
            <input type="text" name="estoque">
            <br><br>
            <button>Cadastrar</button>
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
            }
            h1{
                margin: 0.67em
            }
            .bar {
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
            .buttonChild{
                width: 500px;
                height: 100px;
                font-size: 50px;
                margin: 20px;
                background-color: white;
                border-radius: 50px;
            }
            .buttonChild:hover{
                background-color: lightgrey;
            }
        </style>
</html>