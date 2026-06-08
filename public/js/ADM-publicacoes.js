const modalcreate = document.getElementById(ModalCriar);
const modaledit = document.getElementById(containermodalview);
const modalview = document.getElementById(ModalExcluir);
const modaldelete = document.getElementById(containermodaledit);
const screenposts = document.getElementById('auxposts');

function InteracaoModal(idModal) {
    const modal = document.getElementById(idModal);
    if(modal.style.display == 'none'){
        modal.style.display = "block";
        screenposts.style.display = "block";
    }else{
        modal.style.display = "none";
    }
}

screenposts.addEventListener("click", function (){
    alert ("se fuder")
    modalcreate.style.display = "none";
    modaledit.style.display = "none";
    modalview.style.display = "none";
    modaldelete.style.display = "none";
    screenposts.style.display = "none";
});