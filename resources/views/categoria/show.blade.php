<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com view</title>
</head> 
<body>
    <h2>Produto</h2>
    <p><b>Nome:</b>    {{ $categoria->nome       }}</p>
    <p><b>Criação:</b> {{ $categoria->created_at }}</p>
</body>
</html>