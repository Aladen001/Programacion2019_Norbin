<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body background="looney.jpg">
    <div class="container">
    <h1 class="display-4">Calculadora</h1>
    <div class="row">
    <!-- Formulario -->
    <div class="col-md-5">
    <form method="post">
    <div class="form-group">
    <label for="numero1">Numero 1</label>
    <input type="text" name="numero1" value="<br/>
    "class="form-control">
        </div>
        <div class="form-group">
        <label for="numero2">Numero 2</label>
        <input type="text" name="numero2" value="br/>
        "class="form-control">
        </div>
        <div class="form-group">
        <label for>Operacion</body>
        <br>
        <input type="radio" name="opcion" value="1">
        " Suma

        <input type="radio" name="opcion" value="2">
        " Resta

        <input type="radio" name="opcion" value="3">
        " Multiplicacion

        <input type="radio" name="opcion" value="4">
        " Division
        </div>
        <div class="form-group">
        <button type="submit" name="Calcular" class="btn btn-info">Calcular</button>
        </div>
        </form> 
        </div>
        <!-- Resultado -->
        <div class="col-md-6">
        </div>
        </div>
        </div>
        </body>
</html>