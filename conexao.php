<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "desafio";

$mysqli = new mysqli($host, $user, $pass, $db);
if($mysqli->connect_errno) {
    die("FALHA NA CONEXAO");
}
?>