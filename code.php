<?php
session_start();
require 'conexao.php';

if(isset($_POST['delete_conteiner']))
{
    $conteiner_id = mysqli_real_escape_string($con, $_POST['delete_conteiner']);

    $query = "DELETE FROM container WHERE idContainer='$conteiner_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Conteiner excluido com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir o Conteiner";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_conteiner']))
{   
    $conteiner_id = mysqli_real_escape_string($con, $_POST['idContainer']);

    $nm_conteiner = mysqli_real_escape_string($con, $_POST['nm_conteiner']);
    $nm_cliente = mysqli_real_escape_string($con, $_POST['nm_cliente']);
    $tipo = mysqli_real_escape_string($con, $_POST['tipo']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $categoria = mysqli_real_escape_string($con, $_POST['categoria']);


    $query = "UPDATE container SET nm_conteiner='$nm_conteiner', nm_cliente='$nm_cliente', tipo='$tipo', status='$status', categoria='$categoria' WHERE idContainer='$conteiner_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Conteiner atualizado com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Conteiner não atualizado";
        header("Location: index.php");
        exit(0);
    }

}

if(isset($_POST['save_conteiner']))
{
    $nm_conteiner = mysqli_real_escape_string($con, $_POST['nm_conteiner']);
    $nm_cliente = mysqli_real_escape_string($con, $_POST['nm_cliente']);
    $tipo = mysqli_real_escape_string($con, $_POST['tipo']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $categoria = mysqli_real_escape_string($con, $_POST['categoria']);

    $query = "INSERT INTO container (`nm_conteiner`, `nm_cliente`, `tipo`, `status`, `categoria`) VALUES ('$nm_conteiner','$nm_cliente','$tipo','$status','$categoria')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Conteiner cadastrado com sucesso!";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Conteiner não cadastrado";
        header("Location: index.php");
        exit(0);
    }
}
