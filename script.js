/*------------------------------------------------------------------------
 DARK MODE START 
 */
const darkModeButtons = document.querySelectorAll(".dark-mode-btn");
const logo = document.querySelectorAll(".abcd");
let darkMode = localStorage.getItem("darkMode");
let darkIcon = document.querySelectorAll('.fa-moon');
const enableDarkMode = () => {
  document.body.classList.add("dark-mode");
  localStorage.setItem("darkMode", "enabled");
  for (var i = 0; i < darkIcon.length; i++) {
    darkIcon[i].classList.toggle('far');
    darkIcon[i].classList.toggle('fas');
  }
};
const disableDarkMode = () => {
  document.body.classList.remove("dark-mode");
  localStorage.setItem("darkMode", null);
  for (var i = 0; i < darkIcon.length; i++) {
    darkIcon[i].classList.toggle('far');
    darkIcon[i].classList.toggle('fas');
  }
};
if (darkMode === "enabled") {
  enableDarkMode();
}
for (var i = 0; i < darkModeButtons.length; i++) {
  darkModeButtons[i].addEventListener("click", () => {
    darkMode = localStorage.getItem("darkMode");

    console.log("clicked");
    if (darkMode != "enabled") {
      enableDarkMode();

    } else {
      disableDarkMode();
    }
  });
}
/*
 dark mode close
 ------------------------------------------------------------------------*/

var searchBtnTop = document.querySelector(".search-btn-top");
var cancelSearchBtnTop = document.querySelector(".cancel-search-btn-top");
var headerMobileFormSearchBox = document.querySelector(
  ".header-mobile form.search-box"
);
var barBtn = document.querySelector(".bar-btn");
var crossBarBtn = document.querySelector(".cross-bar-btn");
var barDetails = document.querySelector(".bar-details");

// Search button click events
searchBtnTop.addEventListener("click", () => {
  headerMobileFormSearchBox.style.display = "flex";

  searchBtnTop.style.display = "none";
  cancelSearchBtnTop.style.display = "block";
  document.querySelector(".header-mobile").style.height = 55 + "px";
});

// cancel button after search bar click events
cancelSearchBtnTop.addEventListener("click", () => {
  headerMobileFormSearchBox.style.display = "none";
  searchBtnTop.style.display = "block";

  cancelSearchBtnTop.style.display = "none";
  document.querySelector(".header-mobile").style.height = 39 + "px";
});

// two lined bar button before logo events

barBtn.addEventListener("click", () => {
  barDetails.style.display = "block";
  crossBarBtn.style.display = "block";
  barBtn.style.display = "none";
  // searchBtnTop.style.display = 'none';
});
crossBarBtn.addEventListener("click", () => {
  barDetails.style.display = "none";
  crossBarBtn.style.display = "none";
  barBtn.style.display = "block";
  // searchBtnTop.style.display = 'block';
});

//
// FILTER CODE
//
const filterIcon = document.querySelector(".filter-icon");
const filterDrop = document.querySelector(".drop");
const upOrDown = document.querySelector(".icon");

filterIcon.addEventListener("click", () => {
  upOrDown.classList.toggle("fa-angle-up");
  filterDrop.classList.add("filter-drop-down-list");
  filterDrop.classList.toggle("drop");
});