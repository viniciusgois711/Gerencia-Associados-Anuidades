<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "associadoseanuidade" ;

// Criar conexão com db
$con = mysqli_connect($host, $user, $password, $db);

// se houver um erro, mostra o erro
if($con->connect_error){
    echo "Falha ao conectar: " . $con->connect_error;
}