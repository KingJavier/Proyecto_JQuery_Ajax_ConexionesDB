//Primer Ejercicio.
document.getElementById("boton1").addEventListener("click",click1)

function click1(){

    //Sintaxis

    var contents = prompt("¿Qué poner en la caja de Pandora?", "Todos los males");
    console.log("Poner "+contents+" en la caja de Pandora");
    $('#pandora').html(contents);
}

//Segundo Ejercicio
document.getElementById("boton2").addEventListener("click",click2)

function click2(){

    //El metodo HTML
    var items = prompt("Horrocruxes ", "<li>El diario</li><li>El relicario</li>");
    $('#horcruxes').html(items);
}


//Tercer EJercicio
document.getElementById("boton3").addEventListener("click",click3)

function click3(){
    
    //Modificar atributos CSS 
    $("#fig1").css("border","2px solid white");
    $("#fig1").css("text-align","center");
    $("#fig1").css("padding","10px");
    $("#fig1 figcaption").css("background-color","white");

}

//Cuarto Ejercicio
document.getElementById("boton4").addEventListener("click",click4)

function click4(){

    //Cambiar una imagen inical
    $("#fig2 img").attr("src","img/Ron_Weasley_poster.jpg");
    $("#fig2 img").attr("alt","Ron Weasley");
    $("#fig2 figcaption").html("Ron Weasley interpretado por Rupert Grint");
}

//Quinto Ejercicios
document.getElementById("boton5").addEventListener("click",click5)

function click5(){

    //Esconderlo
    $("#fig3").hide();

}

document.getElementById("boton10").addEventListener("click",click10)

function click10(){

    //Enseñarlo
    $("#fig3").show();

}

//Sexto Ejercicio
document.getElementById("boton6").addEventListener("click",click6)

function click6(){
    $("#characters1 li").css("font-size","18px");   // coincide con 10 elts
    $("#characters1 .gryffindor").css("color","red");  // coincide coin 5 elts
    $("#characters1 .slytherin").hide();    // coincide con 3 elt
}

//Septimo Ejercicio
document.getElementById("boton7").addEventListener("click",click7)

function click7(){

    //Añade css a una imagen.
    $("#fig4")
    .css("border","2px solid red")
    .css("text-align","center")
    .css("padding","10px");
}

//Octavo Ejercicio
document.getElementById("boton8").addEventListener("click",click8)

function click8(){

    //Crea una un nuevo campo y define parametros.
    $("<li>")
    .html("Percy")
    .addClass("gryffindor")
    .css("text-decoration","line-through")
    .appendTo("#characters2");
}

//Noveno Ejercicio
document.getElementById("boton9").addEventListener("click",click9)

function click9(){
    $("#fig2a").removeClass("gryffindor");
    $("#fig2a").addClass("slytherin");
}

//Decimo Ejercicio
document.getElementById("fecha").addEventListener("click",fecha)

function fecha(){
    var d = new Date();
    $("h3").html("Noticias para "+d.toLocaleDateString());
}




