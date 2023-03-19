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

    //pesquisar sobre função    
    $conteiner_id = mysqli_real_escape_string($con, $_POST['idContainer']);

    $nm_conteiner = mysqli_real_escape_string($con, $_POST['nm_conteiner']);
    $nm_cliente = mysqli_real_escape_string($con, $_POST['nm_cliente']);
    $tipo = mysqli_real_escape_string($con, $_POST['tipo']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $categoria = mysqli_real_escape_string($con, $_POST['categoria']);


    $query = "UPDATE container SET nm_conteiner='$nm_conteiner', nm_cliente='$nm_cliente', tipo='$tipo', status='$status', categoria='$categoria' WHERE idContainer='$conteiner_id' ";
    $query_run = mysqli_query($con, $query);

//Caso $query_run (mysqli_query) seja true, a váriavel $_SESSION['MESSAGE'] recebe uma frase dizendo que o conteiner foi atualizado, 
//caso seja false, ela recebe a frase dizendo que o conteiner não foi atualizado.
    if($query_run)
    {
        $_SESSION['message'] = "Conteiner atualizado com sucesso";
        //função rediriciona para index.php
        header("Location: index.php");

        //fim da função do script (mysql)
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
    //mysqli_real_escape_string é usada para verificar caracteres especiais em uma string, tornando-a segura para ser usada em consultas SQL
    
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
