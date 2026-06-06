


function ModalDarlan(idModal) {
    const modal = document.getElementById(idModal);
    if(modal.style.display == 'none'){
        modal.style.display = "block";
    }else{
        modal.style.display = "none";
    }
}