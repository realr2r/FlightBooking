let searchBtn = document.querySelector("#search-btn");
let searchBar = document.querySelector(".search-bar-container");
let loginBtn = document.querySelector("#login-btn");
let loginBtn2 = document.querySelector("#login-btn2");
let loginForm = document.querySelector(".login-form-container");
let loginFormClose = document.querySelector("#login-form-close");
let signupFormClose = document.querySelector("#signup-form-close");
let menu = document.querySelector("#menu-bar");
let navbar = document.querySelector(".navbar");
let videoBtn = document.querySelectorAll(".vid-btn");
let signupLink = document.querySelector("#signup-btn");
let signupForm = document.querySelector(".signup-form-container");

window.onscroll = () => {
  searchBtn.classList.remove("fa-times");
  searchBar.classList.remove("active");
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
  loginForm.classList.remove("active");
  signupForm.classList.remove("active");
};

menu.addEventListener("click", () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
});

searchBtn.addEventListener("click", () => {
  searchBtn.classList.toggle("fa-times");
  searchBar.classList.toggle("active");
});

loginBtn.addEventListener("click", () => {
  signupForm.classList.remove("active");
  loginForm.classList.add("active");
});

loginBtn2.addEventListener("click", () => {
  signupForm.classList.remove("active");
  loginForm.classList.add("active");
});

loginFormClose.addEventListener("click", () => {
  loginForm.classList.remove("active");
});

signupFormClose.addEventListener("click", () => {
  signupForm.classList.remove("active");
});

videoBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.querySelector(".controls .active").classList.remove("active");
    btn.classList.add("active");
    let src = btn.getAttribute("data-src");
    document.querySelector("#video-slider").src = src;
  });
});

signupLink.addEventListener("click", () => {
  loginForm.classList.remove("active");
  signupForm.classList.add("active");
});

