

function cambiarModo() {
    document.body.classList.toggle("noche");

    let boton = document.getElementById("botonModo");

    if (document.body.classList.contains("noche")) {
        boton.textContent = "☀️";
        boton.title = "Activar modo día";
    } else {
        boton.textContent = "🌙";
        boton.title = "Activar modo noche";
    }
}


function mostrarMenu() {
    document.getElementById("menu").classList.toggle("activo");
}

function cerrarMenu() {
    document.getElementById("menu").classList.remove("activo");
}

