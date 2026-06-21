var RandomImg = document.getElementById('login-random'),
imagesdesk= ['../../../public/assets/telas-desk/teladesk-3.png','../../../public/assets/telas-desk/teladesk-2.png','../../../public/assets/telas-desk/teladesk-1.png','../../../public/assets/telas-desk/teladesk-0.png'];
imagescell=['../../../public/assets/telas-mobile/telacell-1.jpg','../../../public/assets/telas-mobile/telacell-2.png','../../../public/assets/telas-mobile/telacell-3.jpg','../../../public/assets/telas-mobile/telacell-4.png','../../../public/assets/telas-mobile/telacell-5.jpg','../../../public/assets/telas-mobile/telacell-6.jpg','../../../public/assets/telas-mobile/telacell-7.jpg','../../../public/assets/telas-mobile/telacell-8.jpg','../../../public/assets/telas-mobile/telacell-9.jpg','../../../public/assets/telas-mobile/telacell-10.jpg','../../../public/assets/telas-mobile/telacell-11.jpg','../../../public/assets/telas-mobile/telacell-12.jpg','../../../public/assets/telas-mobile/telacell-13.jpg','../../../public/assets/telas-mobile/telacell-14.jpg','../../../public/assets/telas-mobile/telacell-15.jpg','../../../public/assets/telas-mobile/telacell-0.jpg']
// alert(images)
var DeskImgCount = imagesdesk.length;
var CellImgCount = imagescell.length;

const cadastrofiltro = document.getElementById('idcadastrofiltro');
const cadastromodal = document.getElementById('ModalCadastro');
// alert(DeskImgCount)
cadastrofiltro.addEventListener("click", function (){
    cadastromodal.style.display = "none";
    cadastrofiltro.style.display = "none";
});

window.onload = function(){
    if ( window.matchMedia("(max-width: 414px)").matches){
        var numberC = Math.floor(Math.random() * CellImgCount);
        // alert(numberC);
        RandomImg.style.backgroundImage = 'url('+imagescell[numberC]+')'
    }else{
        var numberD = Math.floor(Math.random() * DeskImgCount);
        // alert(numberD);
        RandomImg.style.backgroundImage = 'url('+imagesdesk[numberD]+')'
    };
}
const LoginEyeOpen = document.getElementById('eye-open');
const LoginEyeClosed = document.getElementById('eye-closed');
const LoginPassword= document.getElementById('login-password');

LoginEyeClosed.addEventListener("click", function (){
    LoginPassword.type = "text";
    LoginEyeClosed.style.display = "none";
    LoginEyeOpen.style.display = "block";
});
LoginEyeOpen.addEventListener("click", function (){
    LoginPassword.type = "password";
    LoginEyeClosed.style.display = "block";
    LoginEyeOpen.style.display = "none";
});

function abrirModal(idModal, idFiltroModal) {
    const modal = document.getElementById(idModal);
    console.log('Modal encontrado:', modal);
    const filtromodal = document.getElementById(idFiltroModal);
    modal.style.display = "flex";
    filtromodal.style.display = "flex";
};

function fecharModal(idModal, idFiltroModal) {
    const modal = document.getElementById(idModal);
    const filtromodal = document.getElementById(idFiltroModal);
    modal.style.display = "none";
    filtromodal.style.display = "none";
}