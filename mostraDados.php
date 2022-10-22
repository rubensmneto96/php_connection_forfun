<?php

    require 'dados_conexao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center;">Resultados</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once('./crud/select.php');

                    if ($result->num_rows > 0) {

                        while($row = $result->fetch_assoc()) {
                        
                ?>

                <tr>
                <th scope="row"><?= $row['id_usuario']; ?></th>
                <td><?= $row['nomeUser']; ?></td>
                <td><?= $row['email']; ?></td>
                <form action="./editarDados.php" method="post">
                    <td>
                        <input type="hidden" name="id_usuario" value="<?= $row['id_usuario']; ?>">
                        <button type="submit" class="btn btn-success">Editar</button>
                    </td>
                </form>
                <form action="./deletarDados.php" method="post">
                    <td>
                        <input type="hidden" name="id_usuario" value="<?= $row['id_usuario']; ?>">
                        <input type="hidden" name="nomeUser" value="<?= $row['nomeUser']; ?>">
                        <input type="hidden" name="email" value="<?= $row['email']; ?>">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </td>
                </form>
                </tr>

                <?php
                        }
                    } else {
                        echo "<h2> Nenhum resultado encontrado.</h2>";
                    }    
                ?>
            </tbody>
    </table>
    </div>
    <div class="container">
    <a href="./index.php" class="btn btn-primary">Voltar</a>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>