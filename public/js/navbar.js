const buttonToggle = document.querySelector('.nav-right');

const NavbarOpenicon = document.getElementById('list');
const NavbarClosedicon = document.getElementById('X');
const NavbarOpen = document.getElementById('NavOpen');
const NavbarClosed = document.getElementById('NavClosed');
export const navbar = document.querySelector(".nav.container")



NavbarOpenicon.addEventListener("click", function (){
    NavbarOpen.style.display = "flex";
    NavbarClosed.style.display = "none";
});

NavbarClosedicon.addEventListener("click", function (){
    NavbarOpen.style.display = "none";
    NavbarClosed.style.display = "flex";
});

window.addEventListener("scroll", function() {
  var navbar = document.querySelector(".nav-container");
  if (window.scrollY > 50) { 
    navbar.classList.add("const");
  } else {
    navbar.classList.remove("const");
  }
});