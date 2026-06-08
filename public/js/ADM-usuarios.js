function Uabrirmodal(idModal){
    const modal = document.getElementById(idModal);
    if (modal.style.display == 'none') {
        modal.style.display = "flex";
    }else{
        modal.style.display = "none";
    }
}
function abrirModalExcluir(idModal) {
    alert("Cu Do Heitor");
    const modal = document.getElementById(idModal);
    modal.style.display = "flex";
}

function fecharModalExcluir(idModal) {
    const modal = document.getElementById(idModal);
    modal.style.display = "none";
}