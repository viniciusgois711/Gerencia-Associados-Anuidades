<?php


    if(!empty($_GET['ano'])){
    
        include("../conexao.php");
        $ano = $_GET['ano'];

        $chamada = "SELECT * FROM anuidades WHERE ano=$ano";
        $resultado = $con->query($chamada);

        if($resultado->num_rows >0){
            $chamadaDelecao = "DELETE FROM anuidades WHERE ano=$ano";
             
            $resultadoDelecao = $con->query($chamadaDelecao);
        }
        header('Location: listar-anuidades.php');
    }
    
    header('Location: listar-anuidades.php');

?>