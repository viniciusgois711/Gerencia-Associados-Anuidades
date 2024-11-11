<?php 

    include("../conexao.php");

    if(isset($_POST['atualizarAnuidade'])){

        $id = $_POST['id'];
        $ano = $_POST['ano'];
        $valor = $_POST['valor'];

        // Atualiza o valor de todos campos que tiverem o ano que o usuarios escolheu
        $chamadaSql = "UPDATE anuidades SET valor='$valor' WHERE ano='$ano'";

        $resultado = $con->query($chamadaSql);

        header("Location: listar-anuidades.php");
    }

?>