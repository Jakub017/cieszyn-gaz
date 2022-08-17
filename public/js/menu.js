const menu = document.querySelector('.menu-list');
const menuBtn = document.querySelector('.hamburger-container');


function menuActive() {
    menu.classList.toggle('active');
}

menuBtn.addEventListener("click", menuActive);
