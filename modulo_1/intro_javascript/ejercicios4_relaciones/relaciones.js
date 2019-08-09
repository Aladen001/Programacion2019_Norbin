var carro = {
    tieneBateria: false,
    tengoLlave: true,
    
}
    if(carro.tieneBateri && carro.tengoLlave) {
        console.log("El carro va a encender");
    }else{
        console.log("No enciende");
    }
    //Poder comer
    var mesa = {
        hayCucharra:true,
        hayTenedor:true,
    }
    if(mesa.hayCucharra || mesa.hayTenedor){
        console.log("Puedo comer");
    }
    else{
        console.log("No puedo comer");
    }