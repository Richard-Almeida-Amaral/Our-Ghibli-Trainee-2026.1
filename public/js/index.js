const perfilSidebar = document.querySelector(".perfilSidebar");

perfilSidebar.addEventListener("click", () => {
    const sidebar = document.querySelector(".sidebar");
    sidebar.classList.toggle("closed-sidebar");
});
