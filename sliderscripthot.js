const slider = document.querySelector("#hot-slider-div");
let counter = 4;
const size = 25;
var countel = document.querySelector("#hot-slider-div").childElementCount;
console.log("total child el=" + countel);
const prevBtn = document.querySelector("#btn-prev-brand-js-hot");
const nextBtn = document.querySelector("#btn-next-brand-js-hot");
slider.style.transform = "translateX(" + -size * counter + "%)";
console.log(counter);
prevBtn.addEventListener("click", prevbtnfun);

function prevbtnfun() {
    if (counter < 1) return;
    console.log(counter);
    slider.style.transition = "transform 0.4s ease-in-out";
    counter--;

    slider.style.transform = "translateX(" + -size * counter + "%)";
}

nextBtn.addEventListener("click", () => {
    if (counter > countel - 4) return;
    console.log(counter);
    slider.style.transition = "transform 0.4s ease-in-out";
    counter++;
    slider.style.transform = "translateX(" + -size * counter + "%)";
});

slider.addEventListener("transitionend", () => {
    console.log("transition end" + counter);
    if (counter > countel - 5) {
        counter = 4;
        slider.style.transition = "none";
        slider.style.transform = "translateX(" + -size * counter + "%)";
    }
    if (counter < 1) {
        counter = countel - 8;
        slider.style.transition = "none";
        slider.style.transform = "translateX(" + -size * counter + "%)";
    }
});