alert("Bienvenido a tu banco");

// ENTRADA
var nombre=prompt("Engresar tu nombre");
var monto= parseInt(prompt("Engresar el monto de pretamos"));
var cuotas=parseInt(prompt("Engresar en cuantas cuotas lo vas a pagar"));
var tasa = parseInt(prompt("Engresar la tasa del prestamo"));

// PROCESO
var pago= monto/cuotas;
var interes= (monto * tasa) / 100;
var total= monto + interes;


//SALIDA
alert( "El pago mensual es de" + pago);
alert("Elde interes es de" + interes);
alert("El total a pagar sera de" + total);