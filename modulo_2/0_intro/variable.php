<?php
//Comentario en linea 
/*
multi
linea
*/
#Comentario en linea
//VARIABLE
$nombre = "Waddley";
$edad = 26;
$estaCasado = true;

//Imprimir
echo $nombre;
echo $edad;
echo $estaCasado;

//Concatenacion
echo "Hola" .$nombre . "<br>";
//echo "Hola " +$nombre; //esto da error
echo 10 + 10;


echo "<p>Hola $nombre, tienes $edad anos<p>";
echo '<p>Hola $nombre, tienes $edad anos<p>';

echo "<p>Hola {$nombre}, tienes {$edad} anos<p>";
echo '<p>Hola {$nombre}, tienes {$edad} anos<p>';

echo "<img src='fondo.jpg' />";
echo '<img src="fondo.jpg" />';



die;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hala a todos <?php</p>
</body>
</html>