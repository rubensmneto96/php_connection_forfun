<?php

    require_once('./dados_conexao.php');

    $sql = "UPDATE usuarios SET nomeUser='$nomeUser', email='$email' WHERE id_usuario='$idUsuario'";
    $result = $connection->query($sql);

    $connection->close();
?>
