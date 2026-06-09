function Uabrirmodal(idModal){
    const modal = document.getElementById(idModal);
    if (modal.style.display == 'none') {
        modal.style.display = "flex";
    }else{
        modal.style.display = "none";
    }
}