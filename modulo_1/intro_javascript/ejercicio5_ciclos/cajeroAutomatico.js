alert("Bienvenido a TuBancoNoruego. Seguridad al 100%");
var Cliente ={
    Nombre:"Waddley B",
    Apellido:"Norbin",
    Edad:26,
    Balance:0,
    tarjeta:080791,
    PIN:0000,
    TipoCuenta:"deposito",
}
var idioma =prompt("Seleciona tu Idioma");
//Introducir la tarjeta
var tarjeta =prompt("Itroduzca la tarjeta por favor");
//validar con 6 numero
while(tarjeta.length !== 6){
}
// validar que la tarjeta ingresada coincia con la mia
while(tarjeta != Cliente.tarjeta){

}

//Digitarr el PIN
var pin=prompt("Digite su PIN");
if(pin.length > 4){
    alert("PIN invalido");
}
//Muestran las opciones
var opcion =prompt(`Seleciona opcion a realizar
1.Retiro
2.Avance
3.Chequear Balance
4.Deposit`);
//Selecciono opcion
var opcionMonto =prompt(`Seleciona una opcion 
1.200$
2.500$
3.1000$
4.15000$
5.2000$
6.4000$
7.otro monto
`);
//Seleccionar tipo de cuenta
prompt(`Seleciona el tipo de cuenta
1.Cuenta Ahorro
2.
3.`);
//Muestra opciones de monto 
//Seleccionomonto
//Muestra opcion de recibo
prompt(`Quiere ver el recibo
1.Si
2.No `);
//Elegir si o no del comprobante del recibo

//var valor = prompt ("Digita un valor");
//console.log(typeof valor);

//var foo = 'Hello World';
//console.log(foo.length);
//Introducir la tarjeta
var tarjeta = prompt ("Introduzca la tarjeta,por favor");
// Validar que la longitud de digitos sea 12
// Mostrar un mensaje en caso que  la longitud sea mayor que 12
if(tarjeta.lenght > 4){
    alert("Your fucking card is declined ma nigga");
}
