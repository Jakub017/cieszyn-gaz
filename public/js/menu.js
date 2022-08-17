const menu = document.querySelector('.menu-list');
const menuBtn = document.querySelector('.hamburger-container');


function menuActive() {
    menu.classList.toggle('active');
}

menuBtn.addEventListener("click", menuActive);












const cookiesModal = document.querySelector('.cookies-wrapper');

document.addEventListener('DOMContentLoaded', () => {
    if (getCookie('acceptCookies') != 'yes') {
        createCookiesModal();
    }
});


function createCookiesModal() {
    cookiesModal.classList.add('active');
}


function acceptCookies() {
    setCookie('acceptCookies', 'yes', 7);
    cookiesModal.classList.remove('active');
}


function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    let user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 365);
        }
    }
}
