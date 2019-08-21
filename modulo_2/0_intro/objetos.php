<?php

//objetos
$persona = new stdClass();
$persona->nombre = "Waddley";
$persona->edad = 26;
$persona->estaCasado = true;

if ($persona->edad >=18){
    echo "$persona->nombre es mayor de edad";
}else{
    echo "$persona->nombre es menor de edad";
}