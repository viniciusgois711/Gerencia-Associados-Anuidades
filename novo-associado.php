<?php

    include("conexao.php");

    # Verifica se o botão submit foi clicado
    if(isset($_POST['submit'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $data_filiacao = $_POST['data_filiacao'];

        # Inserir dados na tabela "associados"
        $result = mysqli_query($con, "INSERT INTO associados(nome,email,cpf,data_filiacao) VALUES ('$nome', '$email', '$cpf', '$data_filiacao')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo associado</title>
</head>
<body>
    <h1>Criar novo associado</h1>

    <form action="novo-associado.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br>

        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf"><br>

        <label for="data_filiacao">Data Filiacao: </label>
        <input type="date" name="data_filiacao" id="data_filiacao"><br>


        <input type="submit" name="submit" value="Criar">
    </form>

</body>
</html>