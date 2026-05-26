function abrirModalVisualizar(idModal) {
    const modal = document.getElementById(idModal);
    modal.style.display = "flex";

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