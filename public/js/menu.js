const menu = document.querySelector('.menu-list');
const menuBtn = document.querySelector('.hamburger-container');


function menuActive() {
    menu.classList.toggle('active');
    // console.log("Dziala");
}

menuBtn.addEventListener("click", menuActive);
