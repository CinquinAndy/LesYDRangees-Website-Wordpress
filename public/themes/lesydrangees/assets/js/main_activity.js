let menuIcon = document.getElementById("plate2");
let navLinks = document.getElementById("navLinks");
let _btn_arrow_left = document.getElementById("_btn_arrow_left");
let _btn_arrow_right = document.getElementById("_btn_arrow_right");
let compteur = 1;

if (navigator.userAgent.indexOf("Firefox") != -1 || navigator.userAgent.indexOf("Safari") != -1 || navigator.userAgent.indexOf("Apple") != -1) {
  menuIcon.classList.remove("burger");
}

window.onload = () => {
    AOS.init({
        duration: 800, // values from 0 to 3000, with step 50ms
    });
};
