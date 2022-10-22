<?php

    $idUsuario = $_POST['id_usuario'];

    require_once('./crud/delete.php');

    header('Location: ./mostraDados.php');

?>