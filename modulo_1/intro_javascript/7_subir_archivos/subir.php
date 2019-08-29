<?php
$error ="";
$mensaje ="";
if(isset ($_POST['subir'])) {
//echo "<pre>";
//print_r($_FILES);
//echo "</pre>";
if (isset($_FILES['archivo']) && ($_FILES['archivo']['error']) == 0){
$nombre = $_FILES['archivo']['name'];
$nombre_tmp = $_FILES['archivo']['tmp_name'];
$tamano = $_FILES['archivo']['size'];

if(is_uploaded_file($nombre_tmp)){
    echo "Hemos resibirdo el archivo";
    // MOveer el archivo a nuestro carpeta
    $movido = move_uploaded_file($nombre_tmp,"archivos_resividos/".$nombre);
    if($movido){
echo"El archivo se subio correctamente";
    } else{
        echo"Noe se pudo subir correctamente";
    }
}else{
    echo "Ne se pudo resibir el archivo";
}
}

}
else {
    echo "No se ha enviado un archivo";
    }


// Incluir la vista
require_once 'archivo.html.php';
?>