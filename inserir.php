<?php
    $query = new mysqli (
        "mysql-42162-0.cloudclusters.net:18933",
        "admin",
        "c7xiLtnJ",
        "tabela_imagens"
    );

    if ($_SERVER["REQUEST_METHOD"] == 'POST'){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        $qu = "insert into Pessoa values ($id, '$nome', $idade)";
        $resultado = $query->query($qu);
        echo("Exito");
    }else{
        echo("nao");
    }
    
    