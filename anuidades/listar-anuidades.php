<?php
    include("../conexao.php");

    $resultado = $con->query("SELECT id, ano, valor FROM anuidades GROUP BY ano ORDER BY ano");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Anuidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../gerencia.html" style="font-weight: bold; color: blue">
                Gerência de Associados e Anuidades
            </a>
        </div>
    </nav>

    <h1 class="mt-4 ms-3">Listar Anuidades</h1>
    <a href="nova-anuidade.php" class="btn btn-success ms-3 mb-3">Nova Anuidade</a>
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
                        echo "<tr>";
                        echo "<td>" . $data['id'] . "</td>";
                        echo "<td>" . $data['ano'] . "</td>";
                        echo "<td>" . $data['valor'] . "</td>";
                        echo "<td>
                                <a class='btn btn-primary' href='editar-anuidade.php?id=$data[id]'>
                                    Editar
                                </a>
                                <a class='btn btn-danger' href='deletar-anuidade.php?ano=$data[ano]'>
                                    Excluir
                                </a>
                             </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
