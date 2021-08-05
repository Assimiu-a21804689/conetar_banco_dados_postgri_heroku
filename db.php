<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> OLA MUNDO </h1>
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
    ?>
</body>
</html>

