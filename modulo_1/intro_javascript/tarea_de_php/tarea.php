<?php
//Uno

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hipotenusa</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
    <h1 class="display-4">La hipotenusa de un triángulo</h1>
    <div class="row">

    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="base"><h4> Base</h4></label>
    <input type="bas"  name="base"  placeholder="Digite la base"  class="form-control">
     </div>


  <div class ="form-group">
     <label for="altura"><h4> altura</h4></label>
      <input type="altura"  name="altura"  placeholder="Digite la altura"  class="form-control">
     </div>




<div class="form-group">
<button name="hipotenusa" class="btn btn-primary"> hipotenusa</button>
</form>
</div>

    <div class="col-md-6">
    <?php
    if (isset($_POST['hipotenusa'])) {
        $base=$_POST['base'];
          $altura=$_POST['altura'];

                $hipo = $base * $altura;
                echo "<div>El resultado de la hipotenusa es : $base * $altura = $hipo </div>";

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>

<br>

//La dos 
<br>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4 notas y sacar el prom </title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body >
    <div class="container">
    <h1 class="display-4">El promedio</h1>
    <div class="row">

    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="numero1"><h4>numero1</h4></label>
    <input type="number"  name="numero1"  placeholder="Digite el numero1"  class="form-control">
     </div>

  <div class ="form-group">
     <label for="numero2"><h4>numero2</h4></label>
      <input type="number"  name="numero2"  placeholder="Digite el numero2" class="form-control">
     </div>

  <div class ="form-group">
     <label for="numero3"><h4>numero3</h4></label>
      <input type="number"  name="numero3"  placeholder="Digite el numero3"  class="form-control">
     </div>


  <div class ="form-group">
     <label for="numero4"><h4>numero4</h4></label>
      <input type="number"  name="numero4"  placeholder="Digite el numero4"  class="form-control">
     </div>


<div class="form-group">
<button name="promedio" class="btn btn-primary">promedio</button>
</form>
</div>

    <div class="col-md-6">
    <?php
    if (isset($_POST['promedio'])) {
        $numero1=$_POST['numero1'];
          $numero2=$_POST['numero2'];
          $numero3=$_POST['numero3'];
          $numero4=$_POST['numero4'];

            
                $suma=$numero1 +$numero2 +$numero3 + $numero4 ;
                $suma1=$suma/4;
                echo "<div>Resultado de la promedio es : $suma/4 = $suma1 </div>";

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>
<br>
//La tres

<br>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
    <h1 class="display-4">Calcular La Distancia recorrida</h1>
    <div class="row">

   
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="Rapidez"><h4>Rapidez</h4></label>
    <input type="rapide"  name="rapidez"  placeholder="Digite la Rapidez"  class="form-control">
     </div>

  <div class ="form-group">
     <label for="altura"><h4> El tiempo</h4></label>
      <input type="tiemp"  name="tiempo"  placeholder="Digite el tiempo"  class="form-control">
     </div>


<div class="form-group">
<button name="distancia" class="btn btn-primary"> La Distancia </button>
</form>
</div>

    <div class="col-md-6">
    <?php
    if (isset($_POST['distancia'])) {
        $rapidez=$_POST['rapidez'];
          $tiempo=$_POST['tiempo'];

          
                $distanci = $rapidez * $tiempo;
                echo "<div>El resultado de la Distancia es : $rapidez * $tiempo = $distanci metro/segundo </div>";

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>
<br>
// Cuatro

<br>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hipotenusa de un triangulo</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body >
    <div class="container">
    <h1 class="display-4"> triángulo</h1>
    <div class="row">

   
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="cateto1"><h4>cateto1</h4></label>
    <input type="cate"  name="cateto1"  placeholder="Digite el cateto1"  class="form-control">
     </div>


  <div class ="form-group">
     <label for="cateto2"><h4> cateto2</h4></label>
      <input type="catet"  name="cateto2"  placeholder="Digite el cateto2"  class="form-control">
     </div>

    <br>
    //Quinta
    <br>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Numero uno a cien</title>
    </head>
    <body>
    <?php  
for ($x = 1; $x <= 100; $x++) {
  echo "Numero es : $x <br>";
}
?>  
    </body>
    </html>
//la ceis 

<br>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ano de nacimiento</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
    <h1 class="display-4"> tu edad actual</h1>
    <div class="row">

    
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="edad"><h4>  ano de nacimiento</h4></label>
    <input type="eda"  name="edad"  placeholder="Digite  el año de nacimiento"  class="form-control">
     </div>



<div class="form-group">
<button name="age" class="btn btn-primary">edad </button>
</form>
</div>





    <div class="col-md-6">
    <?php
    if (isset($_POST['age'])) {
        $edad=$_POST['edad'];

           
                $a = 2019-$edad;
                echo "<div> La edad actual : 2019- $edad = $a anos </div>";

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>

//La siete
<br>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dia de la semana</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body >
    <div class="container">
    <h1 class="display-4">Dia de la semana</h1>
    <div class="row">

    
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="impa"><h4> Engresar un num plz</h4></label>
    <input type="dia1"  name="dias"  placeholder="Digite  un numero que va a decir que dia es"  class="form-control">
     </div>



<div class="form-group">
<button name="dia" class="btn btn-primary"> El Dia es wawawa </button>
</form>
</div>




    <div class="col-md-6">
    <?php
    if (isset($_POST['dia'])) {
         $dias=$_POST['dias'];
     if ($dias >=1 || $dias<=7)
       if ($dias==1){
               echo "<div>Es lunes </div>";
    }
 if ($dias==2){
               echo "<div>Es Martes </div>";
 }


  if ($dias==3){
               echo "<div>Es Miercoles </div>";
 }


  if ($dias==4){
               echo "<div>Es Jueves</div>";
 }


  if ($dias==5){
               echo "<div>Es Viernes </div>";
 }


 if ($dias==6){
               echo "<div>Es Sabado</div>";
 }

  if ($dias==7){
               echo "<div>Es Domingo </div>";
 }
}

    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>

//Ocho
<br>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes del ano</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
    <h1 class="display-4"> Mes del Anos</h1>
    <div class="row">

    
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="me"><h4> Engresar un sum pa'ver el mes wawawa</h4></label>
    <input type="mess"  name="meses"  placeholder="Digite  un numero que va a decir que mes es"  class="form-control">
     </div>



<div class="form-group">
<button name="mess" class="btn btn-primary"> El Mes es </button>
</form>
</div>





    <div class="col-md-6">
    <?php
    if (isset($_POST['mess'])) {
         $meses=$_POST['meses'];
     if ($meses >=1 || $meses<=12)
       if ($meses==1){
               echo "<div>Es January </div>";
    }
 if ($meses==2){
               echo "<div>Es february </div>";
 }


  if ($meses==3){
               echo "<div>Es march </div>";
 }


  if ($meses==4){
               echo "<div>Es April</div>";
 }


  if ($meses==5){
               echo "<div>Es May </div>";
 }


 if ($meses==6){
               echo "<div>Es June</div>";
 }

  if ($meses==7){
               echo "<div>Es jully </div>";
 }



  if ($meses==8){
               echo "<div>Es August </div>";
 }

  if ($meses==9){
               echo "<div>Es September</div>";
 }

   if ($meses==10){
               echo "<div>Es Octuber </div>";               
 }



  if ($meses==11){
               echo "<div>Es November </div>";
 }

  if ($meses==12){
               echo "<div>Es Dicember </div>";
 }

}

    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>

//Nueve
<br>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Num Impar</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
    <h1 class="display-4">Impar</h1>
    <div class="row">

   
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="impa"><h4> Engresar un num pa've si es Impar</h4></label>
    <input type="impa"  name="impar"  placeholder="Digite  un numero que sea impar"  class="form-control">
     </div>



<div class="form-group">
<button name="impares" class="btn btn-primary">Impar</button>
</form>
</div>




<!--resultado-->
    <div class="col-md-6">
    <?php
    if (isset($_POST['impares'])) {
        $impar=$_POST['impar'];
         if (!($impar %2==0)){
 echo "<div> El numero es Impar : $impar </div>";
         }
               

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>

//Diezz

<br>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Los num pares de 1 a 100</title>
</head>
<body>
<?php  
for ($x = 1; $x <= 100; $x++) {
   if($x %2==0)
  echo "The number is: $x <br>";
}
?>  
    
</body>
</html>