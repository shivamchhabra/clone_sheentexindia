const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navlinks = document.querySelectorAll(".nav-links li");
  //toggle nav
  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");
    navlinks.forEach((link, index) => {
      console.log(index);

      if (link.style.animation) {
        link.style.animation = "";
      }
      link.style.animation = `navLinkFade 0.5s ease forwards ${
        index / 5 + 0.5
      }s`;
    });
    burger.classList.toggle("toggle");
  });
  //animate links
};

navSlide();
var nav = document.getElementById("header");
window.onscroll = function () {
  if (window.pageYOffset > 100) {
    nav.style.background = "black";
  } else {
    nav.style.background = "transparent";
  }
};
