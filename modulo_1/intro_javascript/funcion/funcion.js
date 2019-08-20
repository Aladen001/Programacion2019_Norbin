/*
var numero1= parseInt(prompt("Digite el numero 1"));
var numero2= parseInt(prompt("Digite el numero 2"));

var suma= numero1 + numero2;
document.write(`<p>El resultado de ${numero1} + ${numero2} es ${suma}</p>`);

var numero1= parseInt(prompt("Digite el numero 1"));
var numero2= parseInt(prompt("Digite el numero 2"));

var suma= numero1 + numero2;
document.write(`<p>El resultado de ${numero1} + ${numero2} es ${suma}</p>`);

var numero1= parseInt(prompt("Digite el numero 1"));
var numero2= parseInt(prompt("Digite el numero 2"));

var suma= numero1 + numero2;
document.write(`<p>El resultado de ${numero1} + ${numero2} es ${suma}</p>`);

var numero1= parseInt(prompt("Digite el numero 1"));
var numero2= parseInt(prompt("Digite el numero 2"));

var suma= numero1 + numero2;
document.write(`<p>El resultado de ${numero1} + ${numero2} es ${suma}</p>`);
*/

//declarar funciones
function suma(num1,num2){
return num1 + num2;
}

function rest(num1,num2){
    return num1 - num2;
    }

function mult(num1,num2){
    return num1 * num2;
}

function div(num1,num2){
    return num1 / num2;
}

    //usarlas
var valor1 = parseInt(prompt("Digite el primer valor"));
var valor2 = parseInt(prompt("Digite el segundo valor"));

console.log(suma(valor1,valor2));
console.log(rest(valor1,valor2));
console.log(mult(valor1,valor2));
console.log(div(valor1,valor2));
