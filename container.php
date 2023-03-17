<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/container.css">
</head>
<body>

<table class="table">
  <thead>
    <div class="cabecalho">
        <h1 class="titulo">Container</h1>
    </div>
    <tr>
      <th scope="col">iDContainer</th>
      <th scope="col">Numero Container</th>
      <th scope="col">Cliente</th>
      <th scope="col">Tipo</th>
      <th scope="col">Status</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($container = $query_container->fetch_assoc()) {?>
        <td><?php echo $container['idContainer']?></td>
        <td><?php echo $container['nm_conteiner']?></td>
        <td><?php echo $container['nm_cliente']?></td>
        <td><?php echo $container['tipo']?></td>
        <td><?php echo $container['status']?></td>
        <td><?php echo $container['categoria']?></td>
        <td>
            <button><a href="editar_container.php">Editar</a></button>
            <button><a href="excluir_container.php">Excluir</a></button>
        </td>
        <?php
    }?>

  
    <tr>
    </tr>

  </tbody>
</table>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    

</body>
</html>