<?php

    require_once('./dados_conexao.php');

    $sql = "INSERT INTO usuarios(nomeUser, email) VALUES('$nomeUser', '$email')";

    if ($connection->query($sql) == TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
?>