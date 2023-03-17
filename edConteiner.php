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

    <title>Editar conteiner</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar aluno 
                            <a href="teste.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['idContainer']))
                        {
                            $conteiner_id = mysqli_real_escape_string($con, $_GET['idContainer']);
                            $query = "SELECT * FROM container WHERE idContainer='$conteiner_id' ";
                            $query_run = mysqli_query($con, $query);
            
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $conteiner = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="conteiner_id" value="<?= $conteiner['idContainer']; ?>">

                                    <div class="mb-3">
                                        <label>ID</label>   
                                        <input type="text" name="idContainer" value="<?=$conteiner['idContainer'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <input type="text" name="nm_conteiner" value="<?=$conteiner['nm_conteiner'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nome cliente</label>
                                        <input type="text" name="nm_cliente" value="<?=$conteiner['nm_cliente'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Tipo</label>
                                        <input type="text" name="tipo" value="<?=$conteiner['tipo'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <input type="text" name="status" value="<?=$conteiner['status'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Categoria</label>
                                        <input type="text" name="categoria" value="<?=$conteiner['categoria'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Atualizar Aluno
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Nenhum ID encontrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>