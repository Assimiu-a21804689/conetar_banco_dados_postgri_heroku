<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Armazenando imagens no banco de dados Mysql</title>
    </head>
    <body>
        <h2>Selecione um novo arquivo de imagem</h2>

        <form enctype="multipart/form-data" action="iniser.php" method="post">
            <div><input name="nome_evento" type="text"/></div>
            <div><input name="descricao_evento" type="textarea"/></div>
            <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
            <div><input name="imagem" type="file"/></div>
            <div><input type="submit" value="Salvar"/></div>
        </form>
    </body>
</html>