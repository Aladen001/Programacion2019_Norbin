<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>soy HTMl</h1>
        <?php
        $nombre = "Norbin";
        echo "<h1> Bienvenido a {$_SERVER['HTTP_HOST']} </h1> ";
        echo "Hoy es " . date("l");
        ?>
</body>
</html>