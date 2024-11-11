<?php
    # Quando o usuário clicar no botão de editar o !empty testa se realmente tem um id na chamada
    if(!empty($_GET['id'])){

        include("../conexao.php");

        $id = $_GET['id'];

        $chamada = "SELECT * FROM associados WHERE id=$id";

        $resultado = $con->query($chamada);

        # Testa se o id do SELECT tem no banco de dados, se tiver, ele pega todos os dados e preenche
        if($resultado->num_rows > 0){
            while($data = mysqli_fetch_assoc($resultado)){
                $nome = $data['nome'];
                $email = $data['email'];
                $cpf = $data['cpf'];
                $data_filiacao = $data['data_filiacao'];
            }
        }else{
            header('Location: listar-associados.php'); 
        }

    }else{
        header('Location: listar-associados.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Associado</title>
    <!-- Usar Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <h1>Editar Associado</h1>
        <a href="listar-associados.php" class="btn btn-secondary mb-3">Voltar</a>

        <form action="salvar-atualizacao.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>" required>
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo $cpf ?>" required>
            </div>

            <div class="mb-3">
                <label for="data_filiacao" class="form-label">Data de Filiação:</label>
                <input type="date" name="data_filiacao" id="data_filiacao" class="form-control" value="<?php echo $data_filiacao ?>" required>
            </div>
            
            <!-- Campo oculto para o id -->
            <input type="hidden" name="id" value="<?php echo $id ?>">

            <button type="submit" name="atualizar" class="btn btn-success">Atualizar</button>
        </form>
    </div>

</body>
</html>
