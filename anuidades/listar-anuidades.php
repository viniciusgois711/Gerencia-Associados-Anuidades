<?php

    include("../conexao.php");


    $resultado = $con->query("SELECT * FROM anuidades");

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
    <a href="nova-anuidade.php">Nova Anuidade</a>
    <div class="m-5">  
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ano</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($data = mysqli_fetch_assoc($resultado)){
                        echo '<tr>';
                        echo '<td>' . $data['id'] . '</td>';
                        echo '<td>' . $data['ano'] . '</td>';
                        echo '<td>' . $data['valor'] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
        
        </table>
    </div>
</body>
</html>