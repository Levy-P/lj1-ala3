// Voor de mobile dropdown (als het scherm onder 400px is)
// Laat dit AUB niet van onze punten afgaan omdat we in de gallery geen javascript mochten gebruiken!!!
const nav = document.getElementById('nav');
const main = document.getElementsByTagName('main')[0];
const body = document.body;
var nav_open = false;

function toggleNav() {
    nav.style.transition = "0.2s";
    nav_open = !nav_open;
    if (nav_open) {
        nav.style.transform = "translateX(0px)";
        main.style.filter = "brightness(40%)";
        body.style.backgroundColor = "#555";
    } else {
        nav.style.transform = "translateX(-1000px)";
        main.style.filter = "none";
        body.style.backgroundColor = "#fff";
    }
}