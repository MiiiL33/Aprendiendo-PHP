<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
    if(!is_dir('imagenes')){
        mkdir('imagenes', 0777);
    }
    
    move_uploaded_file($archivo['tmp_name'], 'imagenes/'.$nombre); //tmp_name es el nombre temporal del archivo subido
    header("Refresh: 3; URL=index.php");
    echo "<h1>Imagen subida correctamente</h1>";
    
}else{
    header("Refresh: 3; URL=index.php");
    echo "<h1>Sube una imagen con un formato correcto...</h1";
}