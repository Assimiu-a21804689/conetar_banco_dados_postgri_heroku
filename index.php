<?php 
    $host = "ec2-52-1-20-236.compute-1.amazonaws.com";
    $usernma = "ewkyvtgeowqfjf";
    $passwoed = "ca14347bd00152ed05d076f7e80b1cb957c7d3105c7a6193d2e0c23f9797334e";
    $data_base = "dvf1fou4dmq2s";
    $conecao = "";
    try {
        $conecao =
            new PDO("pgsql:host=$host;port=5432;dbname=$data_base", $usernma,$passwoed, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
       if ($_SERVER["POST"]){
           $imagData = $_POST["path"];
           $query = "select id from photo order by asc";

           $result = $conecao->query($query);
           
           $default = "";
           while ($row = $result->fetch_array()){
               $default = $row['id'];
           }

           $imaPath = "updata/$default.jpng";
           $server_url = "ec2-52-1-20-236.compute-1.amazonaws.com/camera/$imaPath";

           $queryInser = "Insert into photo (path) values ('$server_url')";

           $resultInserir = $conecao->query($queryInser);

           if ($resultInserir === TRUE){
               file_put_contents($imaPath, base64_decode($imagData));
           }


    
 
       }
        
    }catch (PDOException $e){
        echo $e->getMessage();
    }

?>
