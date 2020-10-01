var heroslider = document.querySelector(".hero-slider");
var herocounter = 1;
var herocountel = document.querySelector(".hero-slider").childElementCount - 2;
console.log(herocountel);
var herobtnprev = document.querySelector(".hero-btn-prev");
var herobtnnext = document.querySelector(".hero-btn-next");

heroslider.style.transform = "translateX(" + -100 * herocounter + "%)";


herobtnprev.addEventListener("click", () => {

    if (herocounter < 1) return;
    herocounter--;
    heroslider.style.transition = "transform 0.4s ease-in-out";
    heroslider.style.transform = "translateX(" + -100 * herocounter + "%)";
    console.log("prev btn counter" + herocounter);
});

herobtnnext.addEventListener("click", heronextfun);

function heronextfun() {
    if (herocounter > herocountel) return;
    heroslider.style.transition = "transform 0.4s ease-in-out";
    herocounter++;
    heroslider.style.transform = "translateX(" + -100 * herocounter + "%)";
    console.log("next btn counter" + herocounter);
}
heroslider.addEventListener("transitionend", () => {
    if (herocounter > herocountel) {
        herocounter = 1;
        heroslider.style.transition = "none";
        heroslider.style.transform = "translateX(" + -100 * herocounter + "%)";
    }
    if (herocounter < 1) {
        herocounter = herocountel;
        heroslider.style.transition = "none";
        heroslider.style.transform = "translateX(" + -100 * herocounter + "%)";
    }
});