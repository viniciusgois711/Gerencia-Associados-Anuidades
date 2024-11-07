<?php

    include("conexao.php");

    $chamada = $con->query("SELECT * FROM associados ORDER BY id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Usar bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <h1>listar</h1>
    <div class="m-5">  
        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Data Filiação</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($data = mysqli_fetch_assoc($chamada)){
                            echo "<tr>";
                            echo "<td>" . $data['id'] . "</td>";
                            echo "<td>" . $data['nome'] . "</td>";
                            echo "<td>" . $data['email'] . "</td>";
                            echo "<td>" . $data['cpf'] . "</td>";
                            echo "<td>" . $data['data_filiacao'] . "</td>";
                            echo "<td>x</td>";

                        }
                    ?>
                </tbody>
        
        </table>
    </div>
</body>
</html>