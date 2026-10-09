
function cambiarModo() {
    document.body.classList.toggle("noche");
}


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
    let menu = document.getElementById("menu");
    menu.classList.toggle("activo");
}
