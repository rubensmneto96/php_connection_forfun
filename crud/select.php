<?php

    require_once('./dados_conexao.php');

    $sql = "SELECT * FROM usuarios";
    $result = $connection->query($sql);

    $connection->close();
?>
