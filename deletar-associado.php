<?php

    if(!empty($_GET['id'])){

        include("conexao.php");

        $id = $_GET['id'];

        $chamada = "SELECT * FROM associados WHERE id=$id";

        $resultado = $con->query($chamada);

        if($resultado->num_rows > 0){
            $chamadaDelecao = "DELETE FROM associados WHERE id=$id";

            $resultado = $con->query($chamadaDelecao);
        }

        header('Location: listar-associados.php');
    }



?>