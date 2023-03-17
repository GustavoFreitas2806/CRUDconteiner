<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "desafio";

$con = new mysqli($host, $user, $pass, $db);
if($con->connect_errno) {
    die("FALHA NA CONEXAO");
}
?>