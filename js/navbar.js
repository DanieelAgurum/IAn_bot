let lastScroll = 0;
const header = document.getElementById("main-navbar");

window.addEventListener("scroll", function () {
    let currentScroll = window.scrollY;

    if (currentScroll <= 0) {
        // Cuando lleges arriba del todo, siempre mostrar
        header.classList.remove("scroll-header");
    } else if (currentScroll > lastScroll) {
        // Baja -> ocultar
        header.classList.add("scroll-header");
    } else {
        // Sube-> mostrar
        header.classList.remove("scroll-header");
    }
    lastScroll = currentScroll;
});
