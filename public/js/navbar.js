const buttonToggle = document.querySelector('.nav-right');

const NavbarOpenicon = document.getElementById('list');
const NavbarClosedicon = document.getElementById('X');
const NavbarOpen = document.getElementById('NavOpen');
const NavbarClosed = document.getElementById('NavClosed');



NavbarOpenicon.addEventListener("click", function (){
    NavbarOpen.style.display = "flex";
    NavbarClosed.style.display = "none";
});

NavbarClosedicon.addEventListener("click", function (){
    NavbarOpen.style.display = "none";
    NavbarClosed.style.display = "flex";
});
