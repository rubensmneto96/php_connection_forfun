<?php

    $servername = "localhost:3306";
    $username = "root";
    $password = "root";
    $dbname = "dbteste";

    //Cria conexao

    $connection= new mysqli($servername, $username, $password, $dbname);

    //Verifica conexao

    if ($connection->connect_error) {
        die("Conexão falhou!: " . $connection -> connect_error);
    }

    //echo "Conexão bem sucedida! <br>";

?>