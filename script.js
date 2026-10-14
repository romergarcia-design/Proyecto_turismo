

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

    if (nombre === "" || correo === "" || mensaje === "") {
        avisoContacto.textContent = "Por favor, completa todos los campos.";
        avisoContacto.className = "aviso error";
        return;
    }

    avisoContacto.textContent = "¡Tu mensaje fue enviado correctamente!";
    avisoContacto.className = "aviso exito";

    formularioContacto.reset();
}

formularioContacto.addEventListener("submit", enviarFormulario);
