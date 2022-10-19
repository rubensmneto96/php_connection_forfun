<?php

    $nomeUser = $_POST['nomeUser'];
    $email = $_POST['email'];

    require_once('./crud/insert.php');

    header('Location: ./mostraDados.php');

?>