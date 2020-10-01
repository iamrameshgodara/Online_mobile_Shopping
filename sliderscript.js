const slider = document.querySelector("#apple-slider-div");
let counter = 5;
const size = 20;
var countel = document.querySelector("#apple-slider-div").childElementCount - 10;
console.log("total child el=" + countel);
const prevBtn = document.querySelector("#btn-prev-brand-js-apple");
const nextBtn = document.querySelector("#btn-next-brand-js-apple");
slider.style.transform = "translateX(" + -size * counter + "%)";
console.log(counter);
prevBtn.addEventListener("click", () => {
  if (counter < 1) return;
  console.log(counter);
  slider.style.transition = "transform 0.4s ease-in-out";
  counter--;

  slider.style.transform = "translateX(" + -size * counter + "%)";

});

nextBtn.addEventListener("click", () => {
  if (counter > countel + 4) return;
  console.log(counter);
  slider.style.transition = "transform 0.4s ease-in-out";
  counter++;
  slider.style.transform = "translateX(" + -size * counter + "%)";
});

slider.addEventListener("transitionend", () => {
  console.log("transition end" + counter);


  if (counter < 1) {
    counter = countel;
    slider.style.transition = "none";
    slider.style.transform = "translateX(" + -size * counter + "%)";
  }
  if (counter > countel + 4) {

    counter = 5;
    slider.style.transition = "none";
    slider.style.transform = "translateX(" + -size * counter + "%)";
  }
});