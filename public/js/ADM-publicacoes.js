const screenposts = document.getElementById('auxposts');
const modais1 = document.getElementById('ModalCriar');
const modais2 = document.getElementById('containermodalview');
const modais3 = document.getElementById('ModalExcluir');
const modais4 = document.getElementById('containermodaledit');

function InteracaoModal(idModal) {
    const modal = document.getElementById(idModal);
    alert (modal);
    screenposts.style.display = "block";
    modal.style.display = "block";
}

screenposts.addEventListener("click", function (){
    screenposts.style.display = "none";
    modais1.style.display = "none";
    modais2.style.display = "none";
    modais3.style.display = "none";
    modais4.style.display = "none";
});