<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body background="leopard.jpg">

 <h1>Welcome to Paradise</h1>
 <h2>Registrate para ver mas !!!!</h2>
    <div class="container">
    <div class="row">
    <div class="col-md-5">
    <form method="post">

    <div class ="form-group">
    <input type="text" class="form-control" name="nombre"placeholder="Digite tu nombre">
     </div>
    

     <div class ="form-group">
    <input type="text" class="form-control" name="edad"placeholder="Digite tu edad">
     </div>
   

 <div class ="form-group">
    <input type="mail" class="form-control" name="mail"placeholder="Digite tu mail">
     </div>

 <div class ="form-group">
    <input type="password" class="form-control" name="password"placeholder="Digite tu password">
     </div>
    <button type="submit" name="Registrar" class= btn btn-primary>Enviar</button>

    </div>
    </form>
    </div>
    <?php

if ( isset($_POST['registrar']) ) {
    echo "presionaste el boton";

     //almacenar los datos 
    $nombre = $_POST['nombre'];
      $mail = $_POST['mail'];

    echo "<div class='col-md-4 alert alert-success'>
    Gracias por registrarte $nombre
    <p>Se ha enviado un codigo de confirmacion 
    al correo <b>$mail</b>
    </p>
    </div>";
}

    ?>
    </div>
    </div>
</body>
</html>