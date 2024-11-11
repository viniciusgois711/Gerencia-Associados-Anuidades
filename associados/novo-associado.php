<?php
    include("../conexao.php");

    # Verifica se o botão submit foi clicado
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $data_filiacao = $_POST['data_filiacao'];

        $chamadaSql = "INSERT INTO associados(nome,email,cpf,data_filiacao) VALUES ('$nome', '$email', '$cpf', '$data_filiacao')";
        # Inserir dados na tabela "associados"
        $resultado = $con->query($chamadaSql);
        header('Location: listar-associados.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Associado</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../gerencia.html" style="font-weight: bold; color: blue">
                Gerência de Associados e Anuidades
            </a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Criar Novo Associado</h1>
        <a href="listar-associados.php" class="btn btn-secondary mb-3">Voltar</a>

        <form action="novo-associado.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="data_filiacao" class="form-label">Data de Filiação:</label>
                <input type="date" name="data_filiacao" id="data_filiacao" class="form-control" required>
            </div>

            <button type="submit" name="submit" class="btn btn-success">Criar</button>
        </form>
    </div>

</body>
</html>
