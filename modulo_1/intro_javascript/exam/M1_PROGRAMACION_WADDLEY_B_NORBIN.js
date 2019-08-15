var nombre=prompt("Digitar su nombre correctamente");
var edad=parseInt(prompt("Engresar la edad correctamente"));

while(edad > 120 || edad < 1){
    edad = parseInt(prompt("Digita una edad entre 1-120"));

}

var num1=parseInt(prompt("Digitar el primer numero"));
var num2=parseInt(prompt("Engresar el segundo numero"));


var opcion =prompt(`Seleciona opcion a realizar
1.Addicion
2.Restar
3.Multiplicacion
4.Division`);
while(opcion < 4 || opcion < 1){
    alert(`Digita una opcion de ${Invalido}`);
}
if(opcion ==1){
    var sum = num1 + num2;
    document.write(`la suma de ${num1} y ${num2} es igual a ${suma}`);
}
if(opcion ==2){
    var mult = num1 * num2;
    document.write(`la mult de ${num1} y ${num2} es igual a ${mult}`);
}
if(opcion ==3){
    var rest = num1 - num2;
    document.write(`la rest de ${num1} y ${num2} es igual a ${rest}`);
}
if(opcion == 4){
    if(num2=0){
        document.write(`no va a pasar`);
    }else
        var div = num1 / num2;
    document.write(`la div de ${num1} y ${num2} es igual a ${div}`);
}
    



