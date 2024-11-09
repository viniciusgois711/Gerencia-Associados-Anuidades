<?php


    if(!empty($_GET['id'])){
    
        include("../conexao.php");
        $id = $_GET['id'];
        $chamada = "SELECT * FROM anuidades WHERE id=$id";
        $resultado = $con->query($chamada);

        if($resultado->num_rows >0){
            $chamadaDelecao = "DELETE FROM anuidades WHERE id=$id";
             
            $resultadoDelecao = $con->query($chamadaDelecao);
        }
        header('Location: listar-anuidades.php');
    }
    
    header('Location: listar-anuidades.php');

?>