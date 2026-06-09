// Modal Criar
function AbrirModal(idModal) {
    const modal = document.getElementById(idModal);
    modal.style.display = "flex";

}

function FecharModal(idModal) {
    const modal = document.getElementById(idModal);
    modal.style.display = "none";
}

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

function fecharModalVisualizar(idModal) {
    const modal = document.getElementById(idModal);
    modal.style.display = "none";

    const inputs = modal.querySelectorAll('input');
    inputs.forEach(input => {
        input.value = '';
    });
    
    const passwordInput = document.getElementById('userSenha');
    if(passwordInput) {
        passwordInput.setAttribute('type', 'password');
    }

    const togglePassword = document.getElementById('togglePassword');
    if (togglePassword){
        togglePassword.classList.remove('fa-eye');
        togglePassword.classList.add('fa-eye-slash');
    }
}

document.addEventListener('DOMContentLoaded', () =>{
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('userSenha');


    if (togglePassword && passwordInput){
        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            if(type === 'password'){
                togglePassword.classList.remove('fa-eye');
                togglePassword.classList.add('fa-eye-slash');
            }
            else {
                togglePassword.classList.remove('fa-eye-slash');
                togglePassword.classList.add('fa-eye');
            }
        });
    }
});