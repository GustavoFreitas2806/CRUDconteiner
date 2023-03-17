<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T2S</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>

    <div class="container">
        <div class="titulo">
            <h1 class="text-title">Container</h1>
        </div>
        <div class="container-dados">
            <label class="label-dados "for="name">Digite o número do container</label>
            <input class="input-dados" type="text" name="numero-container" id="numero-container" placeholder="Digite o número de container aqui">

            <label class="label-dados for="name">Digite o nome do cliente do container</label>
            <input class="input-dados" type="text" name="nome-cliente" id="nome-cliente" placeholder="Digite o nome do cliente aqui">

            <div class="container-tipo">
                <label class="label-dados" for="text">Selecione o tipo de container</label><br>
                <input type="radio" id="tp-40" name="tipo_container" value="40">
                <label for="html">40</label><br>
                <input type="radio" id="tp-40" name="tipo_container" value="20">
                <label for="css">20</label><br>
            </div>

            <div class="container-status">
                <label class="label-dados" for="text">Selecione o status do container</label><br>
                <input type="radio" id="container-cheio" name="status_container" value="Cheio">
                <label for="html">Cheio</label><br>
                <input type="radio" id="container-vazio" name="status_container" value="Vazio">
                <label for="css">Vazio</label><br>
            </div>

            <div class="container-categoria">
                <label class="label-dados" for="text">Selecione a categoria do container</label><br>
                <input type="radio" id="container-exportacao" name="container-categoria" value="Exportação">
                <label for="html">Exportação</label><br>
                <input type="radio" id="container-importacao" name="container-categoria" value="Importação">
                <label for="css">Importação</label><br>
            </div>

            <button class="botao-add">Adicionar</button>
        </div>
    </div>
</body>
</html>