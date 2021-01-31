<?php
/*
//abrir archivo
$archivo= fopen("fichero_texto.txt", "a+"); //r para read, a+ para leer y escribir

//leer contenido
while(!feof($archivo)){
    $contenido=fgets($archivo);
    echo $contenido.'<br>';
}

//escribir
fwrite($archivo, "Soy un texto metido desde php");

//cerrar archivo
fclose($archivo);


//copiar fichero
copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");


//renombrar fichero
rename('fichero_copiado.txt', 'archivo_copiado.txt');


//eliminar
unlink('archivo_copiado.txt') or die("error al borrar");
*/
if(file_exists("fichero_texto.txt")){
    echo "El archivo Existe!";
}else{
    echo "No existe el fichero";
}
