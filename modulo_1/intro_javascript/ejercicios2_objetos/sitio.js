// Informacon del sitioweb

var sitioweb ={
titulo:"Huna pure water",
subtitle:"Diseno y desarrollo web",
color:"azul",
tienelogo:false,
creador:"Waddley",
ano:2019,
servidor:"Creation de sitio web"

}

document.title = sitioweb.titulo + "-" + sitioweb.subtitulo;

// Mostrar informacion del sito en la pagina
var h1 = document.querySelector("#info");

console.log(h1);
h1.innerHTML ="sitio web creado por" + sitioweb.creador + "en el ano" + sitioweb.ano;