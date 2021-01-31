<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Subir archivos en PHP</title>
    </head>
    <body>
        <h1>Subida de imagenes con PHP</h1>
        <form action="subida.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"/><br>
            <input type="submit" value="Enviar"/>
        </form>
        <h1>Listado de imagenes</h1>
        <?php
            $gestor = opendir('./imagenes');
            if($gestor):
                while(($image = readdir($gestor)) !== false):
                    if($image != '.' && $image != '..'):
                        echo "<img src='imagenes/$image' width='200px'/><br>";
                    endif;
                endwhile;
            endif;
        ?>
    </body>
</html>