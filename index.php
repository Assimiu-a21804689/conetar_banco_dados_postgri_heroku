<?php 
    include_once ("conecao.php");
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        $nome = $_GET["nome"];
        $id = $_GET["id"];
        $query = "insert into pessoa values ($id, '$nome')";
        inserir_dados($query);
    }
?>
