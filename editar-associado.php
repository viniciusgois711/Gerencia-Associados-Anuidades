<?php

    # Quando o usuário clicar no botão de editar o !empty testa se realmente tem um id na chamada
    if(!empty($_GET['id'])){

        include("conexao.php");

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
    <title>Editar associado</title>
</head>
<body>
    <h1>Editar associado</h1>
    <a href="listar-associados.php">Voltar</a>
    <form action="salvar-atualizacao.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>"><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $email ?>"><br>

        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $cpf ?>"><br>

        <label for="data_filiacao">Data Filiacao: </label>
        <input type="date" name="data_filiacao" id="data_filiacao" value="<?php echo $data_filiacao ?>"><br>
        
        <!-- passando o campo id escondido para quando for alterar no banco de dados, ter a referencia do id -->
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" id="atualizar" name="atualizar" value="atualizar">
    </form>

</body>
</html>