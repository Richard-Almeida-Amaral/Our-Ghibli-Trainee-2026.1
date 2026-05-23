function abrirModalVisualizar(idModal) {
    const modal = document.getElementById(idModal);
    modal.style.display = "flex";

}

function fecharModalVisualizar(idModal) {
    const modal = document.getElementById(idModal);
    modal.style.display = "none";
}

document.addEventListener('DOMContentLoaded', () =>{
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('userSenha');

    if (togglePassword && passwordInput){
        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : password;
            passwordInput.setAttribute('type', type);

            togglePassword.classList.toggle('fa-eye');
            togglePassword.classList.toggle('fa-eye-slash')
        })
    }
})