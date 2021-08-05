<?php
    $mysql = new mysqli (
        "mysql-42162-0.cloudclusters.net:18933",
        "admin",
        "c7xiLtnJ",
        "Teste"
    );
    $query = "insert into Pessoa values (99991, 'Mane Mane Mane', 500)";
    $resultado = $mysql->query($query);
    echo($resultado);
    echo("Ola mundo");