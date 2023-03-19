<?php
session_start();
require 'conexao.php';
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Inicio</title>
</head>

<body>

    <div class="container mt-4">
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do Conteiner
                            <a href="criaConteiner.php" class="btn btn-primary float-end">Adicionar conteiner</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Número</th>
                                    <th>Cliente</th>
                                    <th>Tipo</th>
                                    <th>Status</th>
                                    <th>Categoria</th>
                                    <th>Açoes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM container";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $container) {
                                ?>
                                        <tr>
                                            <td><?= $container['idContainer']; ?></td>
                                            <td><?= $container['nm_conteiner']; ?></td>
                                            <td><?= $container['nm_cliente']; ?></td>
                                            <td><?= $container['tipo']; ?></td>
                                            <td><?= $container['status']; ?></td>
                                            <td><?= $container['categoria']; ?></td>
                                            <td>
                                                <a href="edConteiner.php?idContainer=<?= $container['idContainer']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_conteiner" value="<?= $container['idContainer']; ?>" class="btn btn-danger btn-sm">Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> Nenhum aluno cadastrado </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>