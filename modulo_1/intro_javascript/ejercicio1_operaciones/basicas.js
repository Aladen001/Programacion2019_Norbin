// (ENTRADA) El usuario 2 valores
var valor1 = prompt("Digita el primer valor");
var valor2 = prompt("Digita el segundo valor");

// NOTA: El prompt devuelve los valores como txt 
// en js cuando sumamos el txt lo une (concatena) 
// cuando vayamos a trabajar con numeros es decir convertir
// Txt a numero debemos usar la funcion pareInt()

console.log("15" + "15");
console.log(parseInt("15") + parseInt("15"));
console.log( 15 + 15);

console.log(valor1);
console.log(valor2);

// (PROCESO) Hacer las operaciones con las valores
var sum = parseInt(valor1) + parseInt(valor2);
var res = parseInt(valor1) - parseInt(valor2);
var mult = parseInt(valor1) * parseInt(valor2);
var div =parseInt(valor1) / parseInt(valor2);

// (SALIDA) Imprimir los valores 
console.log(sum);
console.log(res);
console.log(mult);
console.log(div);