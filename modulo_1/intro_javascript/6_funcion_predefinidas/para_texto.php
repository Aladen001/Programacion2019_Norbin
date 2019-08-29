<?php
    //#1 strlen();
$nombre = "Waddley";
$longitud = strlen ($nombre);
echo  "<p>Longitud del nombre <b>$nombre</b> es {$longitud}</b></p>";

// 2#.explode
$cadena = "Guzmán León";
$array = explode(" ", $cadena);
echo $array[0]; // imprime: Guzmán
echo $array[1]; // imprime: León

//#3.str_split

print_r(str_split("Esta es la cadena que vamos a dividir en fragmentos de 4 caracteres",4));
 
print_r(str_split("Esta es la cadena que vamos a dividir en fragmentos"));

// #4. strtoupper();
$ciudad = "Cabo haitiano";
echo strtoupper($ciudad);
?>