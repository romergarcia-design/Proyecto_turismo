

function cambiarModo() {
    document.body.classList.toggle("noche");

    let boton = document.getElementById("botonModo");

    /*Boton modo oscuro y claro */

    if (document.body.classList.contains("noche")) {
        boton.textContent = "☀️";
        boton.title = "Activar modo día";
    } else {
        boton.textContent = "🌙";
        boton.title = "Activar modo noche";
    }
}
/*modo amburguesa  */

function mostrarMenu() {
    document.getElementById("menu").classList.toggle("activo");
}


function cerrarMenu() {
    document.getElementById("menu").classList.remove("activo");
}

/* funcion contactos  */
function enviarFormulario(event) {
    event.preventDefault();

    const nombre = document.getElementById("nombre").value.trim();
    const aviso = document.getElementById("aviso-contacto");

    if (nombre === "") {
        aviso.textContent = "Por favor, ingresa tu nombre.";
        aviso.className = "aviso error";
        return;
    }

    aviso.textContent = "¡Gracias, " + nombre + "! Tu mensaje está listo.";
    aviso.className = "aviso exito";
}