<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUMAR</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body background="saint-michel-archange.jpg">
<H2>Suma de 2 numeros en PHP</H2>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-3">
<form method="post">
<div class="form-group">
<input type="numero" name="num1" class="form-control">
<input type="numero" name="num2" class="form-control">
<button type="submit" name="sumar" class="btn btn-red">Sumar</button>
</div>
</form>
<?php
	if($_POST)
	{	
		$num1 = $_POST
		['num1'];
		$num2 = $_POST
		['num2'];
		$suma = $num1 
		+ $num2;
		echo "La suma de ".$num1." y ".$num2." es ".$suma; 
	}
?>
</div>
</div>
</div>
</body>
</html>

</body>
</html>