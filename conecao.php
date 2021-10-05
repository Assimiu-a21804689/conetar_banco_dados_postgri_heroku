<?php

    function estabelecer_connecao(){
        $host = "ec2-52-1-20-236.compute-1.amazonaws.com";
        $usernma = "ewkyvtgeowqfjf";
        $passwoed = "ca14347bd00152ed05d076f7e80b1cb957c7d3105c7a6193d2e0c23f9797334e";
        $data_base = "dvf1fou4dmq2s";
        $conecao = "";
        try {
            $conecao =
                new PDO("pgsql:host=$host;port=5432;dbname=$data_base", $usernma,$passwoed, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }catch (PDOException $e){
            echo $e->getMessage();
        }

        return $conecao;
    }

    function inserir_dados ($query){
        $conecao = estabelecer_connecao();
        $conecao->query($query);
        echo "Dados inserido com sucesso";
    }

    function consultar_dados ($query){
        $conecao = estabelecer_connecao();
        $resultado = $conecao->query($query);
        $numLinha = $resultado->rowCount();
        $outro = $resultado->fetchAll();

        for ($linh = 0; $linh < $numLinha; $linh ++){
            echo $outro[$linh][0]. " ".$outro[$linh][1]."<br>";
        }
    }

?>