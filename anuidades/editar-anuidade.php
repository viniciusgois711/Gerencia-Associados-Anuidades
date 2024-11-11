<?php


    if(!empty($_GET['id'])){
    
        include("../conexao.php");
        
        $id = $_GET['id'];

        $chamadaSql = "SELECT * FROM anuidades WHERE id=$id";

        $resultado = $con->query($chamadaSql);

        if($resultado->num_rows > 0){
            while($data = mysqli_fetch_assoc($resultado)){
                $ano = $data['ano'];
                $valor = $data['valor'];
            }
        }else{
            header("Location: listar-anuidades.php");
        }
        
    }else{
        header("Location: listar-anuidades.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Anuidade</title>
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
        <h2>Atualizar Anuidade</h2>
        <a href="listar-associados.php" class="btn btn-secondary mb-3">Voltar</a>
        <form action="salvar-atualizacao-anuidade.php" method="POST">
            <div class="mb-3">
                <label for="ano" class="form-label">Ano:</label>
                <input type="text" class="form-control" name="ano" value="<?php echo $ano; ?>">
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor:</label>
                <input type="text" class="form-control" name="valor" value="<?php echo $valor; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" name="atualizarAnuidade" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

</body>
</html>
