<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "desafio";


// realizando conexão com banco
$con = new mysqli($host, $user, $pass, $db);
if($con->connect_errno) {
    //exibir o que aconteceu, dar erro.
    die("FALHA NA CONEXAO");
}
?>