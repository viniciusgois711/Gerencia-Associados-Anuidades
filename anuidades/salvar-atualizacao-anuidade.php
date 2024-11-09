<?php 

    include("../conexao.php");

    if(isset($_POST['atualizarAnuidade'])){

        $id = $_POST['id'];
        $ano = $_POST['ano'];
        $valor = $_POST['valor'];

        $chamadaSql = "UPDATE anuidades SET ano='$ano', valor='$valor' WHERE id='$id'";

        $resultado = $con->query($chamadaSql);

        header("Location: listar-anuidades.php");
    }

?>