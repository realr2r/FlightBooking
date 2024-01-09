let searchBtn = document.querySelector("#search-btn");
let searchBar = document.querySelector(".search-bar-container");
let menu = document.querySelector("#menu-bar");
let navbar = document.querySelector(".navbar");
let videoBtn = document.querySelectorAll(".vid-btn");
// let profileContainer = document.querySelector("#profile-container");
// let profileClose = document.querySelector("#profile-close");
// let profileBtn = document.querySelector("#profile-btn");

window.onscroll = () => {
  searchBtn.classList.remove("fa-times");
  searchBar.classList.remove("active");
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
  profileContainer.classList.remove('active');
};

menu.addEventListener("click", () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
});

searchBtn.addEventListener("click", () => {
  searchBtn.classList.toggle("fa-times");
  searchBar.classList.toggle("active");
});

videoBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.querySelector(".controls .active").classList.remove("active");
    btn.classList.add("active");
    let src = btn.getAttribute("data-src");
    document.querySelector("#video-slider").src = src;
  });
});

// profileBtn.addEventListener('click', () => {
//   profileContainer.classList.add('active')
// })

// profileClose.addEventListener('click', () => {
//   profileContainer.classList.remove('active')
// })



var swiper = new Swiper(".brand-slider", {
  spaceBetween: 20,
  loop: true,
  autoplay:{
    delay:2500,
    disableOnIneraction: false,

  },
  breakpoints: {
    450:{
      slidesPerView: 2,
    },
    
    768: {
      slidesPerView: 3,
    },
    991:{
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    },
  },
});