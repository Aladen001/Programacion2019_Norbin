<?php
//Listado de carros
$carros = array ("Mustang","Range Rover","Nisan GT");
echo count($carros);
?>
//Numeros
<?php
$numeros =[
    "edad"=>14,
    "anio"=>5,

];
echo $numeros["edad"];
?>
//Estudiante

<?php
$estudiante = [

"nombre" => "Waddley",
"edad" => "35",
"estaCasasdo" => true,
"tieneCellular" => true,
];

echo "<p>{$estudiante['nombre']} tiene {$estudiante['edad']}</P>";

?>
