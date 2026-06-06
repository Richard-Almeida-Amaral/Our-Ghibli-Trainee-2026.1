
function abrirModal(idModal, idFiltroModal){
    const modal = document.getElementById(idModal);
    const filtromodal = document.getElementById(idFiltroModal);
    modal.classList.add("aberto");
    filtromodal.classList.add("aberto");

}

function fecharModal(idModal, idFiltroModal){
    const modal = document.getElementById(idModal);
    const filtromodal = document.getElementById(idFiltroModal);
    modal.classList.remove("aberto");
    filtromodal.classList.remove("aberto");

}