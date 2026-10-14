

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

/*contactos */

const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");

function enviarFormulario(event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    const mensaje = document.querySelector("#mensaje").value.trim();

    if (nombre === "") {
        avisoContacto.textContent = "Falta tu nombre, caserito.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (correo === "") {
        avisoContacto.textContent = "Falta tu correo electrónico.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (mensaje === "") {
        avisoContacto.textContent = "Falta escribir tu mensaje.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else {
        avisoContacto.textContent =
            "¡Gracias, " + nombre +
            "! Recibimos tu mensaje. ";

        avisoContacto.classList.add("exito");
        avisoContacto.classList.remove("error");
    }
}

formularioContacto.addEventListener("submit", enviarFormulario);
