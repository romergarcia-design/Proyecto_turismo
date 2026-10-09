

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

const boton = document.getElementById("btn-menu");
const menu = document.getElementById("menu");

boton.addEventListener("click", function () {
    menu.classList.toggle("abierto");

    const abierto = menu.classList.contains("abierto");

    boton.textContent = abierto ? "✕" : "☰";
    boton.setAttribute("aria-expanded", abierto);
    boton.setAttribute(
        "aria-label",
        abierto ? "Cerrar menú" : "Abrir menú"
    );
});