/* 
for(var i= 0; i< 10; i++){
    console.log(i);

}

for(var veces=1; veces<=15; veces++){
    document.write(`<p>Soy un parrafo</p>`);
    if(veces == 5){
        break;
    }
}
for(var veces=1; veces<=15; veces++){
    document.write(`<p>Soy un parrafo</p>`);
    if(veces == 5){
        continue;
    }
    document.write(`<p>Soy un parrafo ${veces}</p>`);
}

for(var i=1; i<=100; i++){
    console.log(i);

var aladen = 0;
while(aladen < 10){
    console.log("Soy un numero");
    aladen++;

}
    var numero= parseInt(prompt("Digite un numero"));
    while (numero < 0){
       var numero = parseInt(prompt("Digite un numero"));
    }
        alert(`El numero digitade es ${numero}`);
        */
       //1
      /* var cat1 = parseInt(prompt("Digite el primer cat"));
       var cat2 = parseInt(prompt("Digite el secundo cat"));

       var potencia1 = cat1 ** 2; // cat1 * cat1
       var potencia2 = cat1 ** 2;
        var sumPotenscia = potencia1 + potencia2;
        var raizCuadrada = Math.sqrt(sumPotenscia);
        alert(`La  putain Hipotenusa es ${raizCuadrada.toFixed(1)}`);
        */
        //2
        /*var nota1 = parseInt(prompt("Digite el primer numero"));
        var nota2 = parseInt(prompt("Digite el segundo numero"));
        var nota3 = parseInt(prompt("Digite el tercera numero"));
        var nota4 = parseInt(prompt("Digite el cuarta numero"));
        var prom = nota1 + nota2 + nota3 + nota4;
        console.log(prom / 4);
        */
        //3
        /*var velocidad = parseFloat(prompt("Digite la velocidad"));
        var tiempo = parseFloat(prompt("Digtar el tiempo"));
        var distencnia;
        distencia = velocidad * tiempo;
        alert(`La distencia recorida es ${distencia}`);
        */
        //4
            /*var numero = parseInt(prompt("Digitar un numero para ver si es cierto"));
            for(numero = 1; numero<=100; numero++){
                console.log(numero);
            }*/
            //10 
            /*for(var num= 1; num<=100; num++ ){
                //imp los pares
                if(num %2 ==0){
                    console.log(num);
                }
            }*/
            //1
            /*var x = parseInt(prompt("Engresar el primer numero"));
                while(x < 0){
                }
                    x = parseInt(prompt("Solo numero positivos"));
                var y = parseInt(prompt("Engresa el segundo numero"));
                    while(y < 0){
                        y = parseInt(prompt("Solo numero positivos"));
                    }
                    var resultado = x + y;
                document.write(resultado);
                
                //2
                var edad = parseInt(prompt("Digite la edad"));
                    while(edad < 18 || edad > 25 ){
                        edad = parseInt(prompt("Digita un numero entre 18-25"));

                    }
                    alert(`la edad digitada ${edad}`);*/
                //3                   
               /* var edad = parseInt(prompt("Digite la edad"));
                    while(edad > 70 || edad < 99 ){
                        edad = parseInt(prompt("Digita un numero entre 18-25"));

                    }
                    alert(`la edad digitada ${edad}`);*/
                   /* var edad = parseInt(prompt("Digite la edad"));
                    while(edad < 18 && edad > 25 ){
                        edad = parseInt(prompt("Digita un numero entre 18-25"));

                    }
                    alert(`la edad digitada ${edad}`);*/
                    //4
                    /*var pin = prompt("Digite su PIN");
                        alert(pin.length);
                        while(pin.length > 4 || pin.length < 4){
                        pin = prompt("El PIN digitando tiene mams de 4 digitos o menos Intanta de nuevo");
                        }*/

                       /* var pin = prompt("Digite su PIN");
                        alert(pin.length);
                        while(pin.length  !== 4) {
                        pin = prompt("El PIN digitando tiene mams de 4 digitos o menos Intanta de nuevo");
                        }*/

                        //5
                       /* var monto = parseInt(prompt("Digitar ell monto"));
                        while (!(monto >= 600)){
                            monto = parseInt(prompt("Digitar un monto valida"));
                        }
                        alert("Bienvenido a tu fucking acount Dow");*/
                        /*var edad= parseInt(prompt("Digite la edad"));
                            while(edad >= 18){
                                document.write(`puede inscribirte`);
                            }*/
                            /*var password = prompt("Digite un password");
                            while(password.length < 8){
                                password = prompt("Digite un password que tenga como minimo 8 digitos");
                            }
                            alert("Password valido");*/

                           /* do{
                                var num = parseInt(prompt("Digite un numero positivo"));
                            }while (num > 0 || num %2 ==1);
                            */
                                do{
                                var con1=prompt("Entra la contrasena");
                                var con2=prompt("Confirmala");
                            }while(!(con1===con2 ));