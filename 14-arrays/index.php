<?php
$pelicula = "Batman";
$peliculas = array('batman', 'superman', 'spiderman');
var_dump($peliculas[1]);

$cantantes = ['2pac', 'Daniel Tompkins', 'Serj Tankian'];
var_dump($cantantes);
//array asociativo
$personas = array(
    'nombre' => 'Lukas',
    'apellido' => 'Avila',
    'perro' => 'Lucero'
);
//Recorrer con for

echo "<h1> Listado de cantantes</h1>";
for($i=0; $i < count($cantantes); $i++){
    echo '<li>'.$cantantes[$i].'</li>';
}

//foreach es diseñado para arrays
echo '<hr><h1>Listado de películas</h1>';

foreach($peliculas as $pelicula){
    echo '<li>'.$pelicula.'</li>';
}
echo '<hr>';
var_dump($personas['perro']);
echo '<hr><h1>Obtenido por la url:</h1>';
var_dump($_GET);

//arrays multidimensionales
echo '<h1>Arrays multidimensionales</h1>';
$contactos = array(
    array(
        'nombre' => 'Ignacio',
        'email' => 'ignacio@utem.cl'
    ),
    array(
        'nombre' => 'José',
        'email' => 'jose@utem.cl'
    ),
    array(
        'nombre' => 'Paolo',
        'email' => 'paolo@utem.cl'
    )
);

//accediendo a los elementos:

//recorriendo el gran array
foreach ($contactos as $key => $contacto){
    var_dump($contacto['nombre']);
}