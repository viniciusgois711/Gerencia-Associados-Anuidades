<?php

    include("../conexao.php");

    # Se o botao submit foi clicado
    if(isset($_POST['submit'])){

      # Guarda o ano e o valor que o usuário digitou
      $ano = $_POST['ano'];
      $valor = $_POST['valor'];

      # Procura todos os associados cadastrados depois do ano de filicao
      $chamadaAno = "SELECT * FROM associados WHERE YEAR(data_filiacao)<=$ano";
      $resultadoAno = $con->query($chamadaAno);

      # Se houver pelo menos um resultado, entra no while
      if($resultadoAno->num_rows > 0){
        # Enquanto houver associados que atendem a $chamadaAno, adiciona na tabela de anuidades
        while($data = mysqli_fetch_assoc($resultadoAno)){
          $id_associado = $data['id'];
          $chamadaAdd = "INSERT INTO anuidades(ano,valor,id_associado) VALUES ('$ano', '$valor', '$id_associado')";
          $resultadoChamada = $con->query($chamadaAdd);
        }
      }

      header('Location: listar-anuidades.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nova Anuidade</title>
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
        <h2>Cadastrar Nova Anuidade</h2>
        <a href="listar-anuidades.php" class="btn btn-secondary mb-3">Voltar</a>
        <form action="nova-anuidade.php" method="POST">
            <div class="mb-3">
                <label for="ano" class="form-label">Ano:</label>
                <input type="text" class="form-control" name="ano" required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor:</label>
                <input type="text" class="form-control" name="valor" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

</body>
</html>
