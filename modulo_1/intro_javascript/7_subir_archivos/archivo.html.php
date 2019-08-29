<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Subir archivo</h1>
    <from method="post" enctype="multipart/from-data">
    <input type="file" name="archivo">
    <button type="submit" name="subir">Subir archivo</button>
    </from>
    <?php
        if(isset($mensaje)){
echo "<div>$mensaje</div>";

        }
        if(isset($error)){
echo "<div>$error</div>";

        }
    ?>
</body>
</html>