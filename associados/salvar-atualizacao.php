<?php

    include("../conexao.php");

    if(isset($_POST['atualizar'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $data_filiacao = $_POST['data_filiacao'];

        $atualizarBanco = "UPDATE associados SET nome='$nome', email='$email', cpf='$cpf', data_filiacao='$data_filiacao' WHERE id='$id'";
        
        $resultado = $con->query($atualizarBanco);
    }

    header("Location: listar-associados.php")
?>