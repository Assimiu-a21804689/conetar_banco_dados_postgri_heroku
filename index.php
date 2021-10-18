<?php 
    $host = "ec2-52-1-20-236.compute-1.amazonaws.com";
    $usernma = "ewkyvtgeowqfjf";
    $passwoed = "ca14347bd00152ed05d076f7e80b1cb957c7d3105c7a6193d2e0c23f9797334e";
    $data_base = "dvf1fou4dmq2s";
    $conecao = "";
    try {
        $conecao =
            new PDO("pgsql:host=$host;port=5432;dbname=$data_base", $usernma,$passwoed, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
            echo "FINALMENT";
        
    }catch (PDOException $e){
        echo $e->getMessage();
    }

?>
