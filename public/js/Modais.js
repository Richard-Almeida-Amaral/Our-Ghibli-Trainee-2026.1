function abrirModal(idModal, idFiltroModal) {
    const modal = document.getElementById(idModal);
    const filtromodal = document.getElementById(idFiltroModal);
    modal.style.display = "flex";
    filtromodal.style.display = "flex";
}

function fecharModal(idModal, idFiltroModal) {
    const modal = document.getElementById(idModal);
    const filtromodal = document.getElementById(idFiltroModal);
    modal.style.display = "none";
    filtromodal.style.display = "none";
}
