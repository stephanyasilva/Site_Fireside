const navbar = document.getElementById("mainNavbar");

window.addEventListener("scroll", function() {

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }

});

const slides = ["s1","s2","s3"];
let current = 0;

setInterval(()=>{

current++;

if(current >= slides.length){
current = 0;
}

document.getElementById(slides[current]).checked = true;

},10000);