
// function abrirModal(idModal, idFiltroModal) {
//     const modal = document.getElementById(idModal);
//     console.log('Modal encontrado:', modal);
//     const filtromodal = document.getElementById(idFiltroModal);
//     modal.style.display = "flex";
//     filtromodal.style.display = "flex";
// };

// function fecharModal(idModal, idFiltroModal) {
//     const modal = document.getElementById(idModal);
//     const filtromodal = document.getElementById(idFiltroModal);
//     modal.style.display = "none";
//     filtromodal.style.display = "none";
// }

const filtroModal = document.getElementById('filtroModal');

let modalAberto = null;

function abrirModal(idModal) {
    modalAberto = document.getElementById(idModal);
    modalAberto.style.display = "flex";
    filtroModal.style.display = "flex";
};

function fecharModal(){
    if(modalAberto!=null){
        modalAberto.style.display = 'none';
        filtroModal.style.display = 'none';
        modalAberto = null;
    }
}

filtroModal.addEventListener("click", function (){
    fecharModal();
});
