<?php

    $idUsuario = $_POST['id_usuario'];
    $nomeUser = $_POST['nomeUser'];
    $email = $_POST['email'];

    require_once('./crud/update.php');

    header('Location: ./mostraDados.php');

?>