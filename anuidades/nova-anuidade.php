<?php

    include("../conexao.php");

    if(isset($_POST['submit'])){

        $ano = $_POST['ano'];
        $valor = $_POST['valor'];

        $chamadaSql = "INSERT INTO anuidades(ano,valor) VALUES ('$ano', '$valor')";
        $resultado = $con->query($chamadaSql);
        header('Location: listar-anuidades.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<form action="nova-anuidade.php" method="POST">
  <div class="mb-3">
    <label for="ano" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano">
  </div>
  <div class="mb-3">
    <label for="valor" class="form-label">Valor:</label>
    <input type="text" class="form-control" name="valor">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>