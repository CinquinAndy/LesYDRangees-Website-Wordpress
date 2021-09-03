let menuIcon = document.getElementById("plate2");
let navLinks = document.getElementById("navLinks");

if (navigator.userAgent.indexOf("Firefox") != -1) {
    menuIcon.classList.remove("burger");
}

menuIcon.addEventListener("click", function () {
    navLinks.classList.toggle("_yd_fade_visible");
    navLinks.classList.toggle("_yd_fade_invisible");
});
