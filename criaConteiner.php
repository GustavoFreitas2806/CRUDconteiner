<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Criar aluno</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Conteiner
                            <a href="index.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Número Container</label>
                                <input type="text" name="nm_conteiner" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Cliente</label>
                                <input type="text" name="nm_cliente" class="form-control">
                            </div>
                            <div class="mb-3">
                                <!-- O segundo valor estará selecionado inicialmente -->
                                <label>Tipo</label><br>
                                <select name="tipo">
                                    <!-- 
                                        TRATAR FAZER VERIFICAÇÃO PARA NAO ENVIAR O VALOR SELECTED "selecionar"
                                        <option selected>Selecionar</option> 
                                    -->
                                    <option value="20">20</option>
                                    <option value="40">40</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Categoria</label>
                                <input type="text" name="categoria" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_conteiner" class="btn btn-primary">Salvar conteiner</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>