<?php
    $query = new mysqli (
        "localhost",
        "root",
        "",
        "Pessoa"
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
    
    