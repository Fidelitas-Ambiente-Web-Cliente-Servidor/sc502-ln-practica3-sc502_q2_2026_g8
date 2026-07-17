// este archivo se hizo en la tarea 2
// creaba las tarjetas de los cursos destacados con javascript puro
// usando un array hardcodeado y createElement/appendChild
// no se borra el codigo porque se vuelve a usar en la tarea 4

/*
var cursos = [
    {
        nombre: "Desarrollo Web",
        descripcion: "Crea sitios con HTML, CSS y JavaScript.",
        imagen: "imagenes/Desarrolo web.jpg",
        categoria: "Programacion"
    },
    {
        nombre: "Diseno UI/UX",
        descripcion: "Disena productos digitales faciles de usar.",
        imagen: "imagenes/diseno2.jpg",
        categoria: "Diseno"
    },
    {
        nombre: "Ciencia de Datos",
        descripcion: "Analiza datos con Python para decidir mejor.",
        imagen: "imagenes/Datos2.jpg",
        categoria: "Datos"
    }
];

function creaTarjeta(curso) {
    var columna = document.createElement("div");
    columna.className = "col-md-4";

    var carta = document.createElement("div");
    carta.className = "card";

    var img = document.createElement("img");
    img.src = curso.imagen;
    img.className = "card-img-top";
    img.alt = curso.nombre;

    var Cuadro = document.createElement("div");
    Cuadro.className = "card-body";

    var Materia = document.createElement("h5");
    Materia.className = "card-title";
    Materia.textContent = curso.nombre;

    var descripcion = document.createElement("p");
    descripcion.className = "card-text";
    descripcion.textContent = curso.descripcion;

    var boton = document.createElement("a");
    boton.className = "btn btn-primary";
    boton.textContent = "Ver mas";

    Cuadro.appendChild(Materia);
    Cuadro.appendChild(descripcion);
    Cuadro.appendChild(boton);
    carta.appendChild(img);
    carta.appendChild(Cuadro);
    columna.appendChild(carta);

    return columna;
}

var contenedor = document.getElementById("cursos-container");

for (var i = 0; i < cursos.length; i++) {
    var tarjeta = creaTarjeta(cursos[i]);
    contenedor.appendChild(tarjeta);
}
*/
