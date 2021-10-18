<?php 
    $host = "ec2-52-1-20-236.compute-1.amazonaws.com";
    $usernma = "ewkyvtgeowqfjf";
    $passwoed = "ca14347bd00152ed05d076f7e80b1cb957c7d3105c7a6193d2e0c23f9797334e";
    $data_base = "dvf1fou4dmq2s";
    $conecao = "";
    try {
        $conecao =
            new PDO("pgsql:host=$host;port=5432;dbname=$data_base", $usernma,$passwoed, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $pedido = $_GET["pedido"];

            if ($pedido == "inserir"){
                $nome = $_GET["nome"];
                $id = $_GET["id"];
                $query = "insert into pessoa values ($id, '$nome')";
                $conecao->query($query);
                echo "Dados inserido com sucesso";
            }

            if ($pedido == "consultar"){
                $id = $_GET["id"];
                $query = "select *from pessoa where id=".$id;
                $retorno = $conecao->query($query);
                $consultor = $retorno->fetchAll();
                
                for ($linha = 0; $linha < $retorno->rowCount(); $linha ++){
                    echo ($consultor[$linha][0])."%-%".($consultor[$linha][1]).">-<";
                }
            }
            
            if ($pedido == "inserirImagem"){
                $id_imagem = $_GET["id"];
                $imagem = $_GET["imagem"];
                
                if ($id_imagem != null){
                    $query = "insert into id_imagem values('$id_imagem')";
                    $conecao->query($query);
                }
                
                if ($imagem != null){
                    $query = "insert into imagem values($id_imagem, '$imagem')";
                    $conecao->query($query);
                }
                
              
                
                echo ("Foto inserido com sucesso");
             
            }
            
        }
        
    }catch (PDOException $e){
        echo $e->getMessage();
    }

?>
