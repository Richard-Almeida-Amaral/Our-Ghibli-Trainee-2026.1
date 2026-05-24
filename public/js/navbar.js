const buttonToggle = document.querySelector('.nav-right');

buttonToggle.addEventListener('click', () => {
    document.querySelector('.nav-container').classList.toggle('.nav-container-open');
    
})