let menuIcon = document.getElementById("plate2");
let navLinks = document.getElementById("navLinks");
let _btn_arrow_left = document.getElementById("_btn_arrow_left");
let _btn_arrow_right = document.getElementById("_btn_arrow_right");
// let slide = [
//     document.getElementById("id1"),
//     document.getElementById("id2"),
//     document.getElementById("id3"),
//     document.getElementById("id4"),
//     document.getElementById("id5"),
// ];
let compteur = 1;

if (navigator.userAgent.indexOf("Firefox") != -1) {
    menuIcon.classList.remove("burger");
}

// menuIcon.addEventListener("click", function () {
//     navLinks.classList.toggle("_yd_fade_visible");
//     navLinks.classList.toggle("_yd_fade_invisible");
// });
//
// function reset_check(){
//     for(let i=0;i<5;i++){
//         slide[i].checked = false;
//     }
// }
// _btn_arrow_right.addEventListener("click",function(){
//     if(compteur!==1){
//         reset_check();
//         compteur--;
//         slide[compteur-1].checked = true;
//     }
// });
//
// _btn_arrow_left.addEventListener("click",function(){
//     if(compteur!==5){
//         reset_check();
//         compteur++;
//         slide[compteur-1].checked = true;
//     }
// });


window.onload = () => {
    AOS.init({
        duration: 800, // values from 0 to 3000, with step 50ms
    });
};
