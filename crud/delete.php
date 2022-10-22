<?php

    require_once('./dados_conexao.php');

    $sql = "DELETE FROM usuarios WHERE id_usuario='$idUsuario'";
    $result = $connection->query($sql);

    $connection->close();
?>
