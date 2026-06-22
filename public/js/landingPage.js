const setaParaCima = document.getElementById("seta-para-cima-hero");
const heroCard = document.getElementById("hero");
const frameSetaParaCima = document.getElementById("framesetahero");
const setaParaBaixo = document.getElementById("seta-para-baixo-hero");

setaParaCima.addEventListener("click", () => {
    heroCard.classList.toggle("reduzida");
    frameSetaParaCima.classList.toggle("reduzida");
    setaParaBaixo.classList.toggle("flex");
    setaParaBaixo.classList.toggle("reduzida");
    setaParaCima.classList.toggle("reduzida"); 
})

setaParaBaixo.addEventListener("click", () =>{
    heroCard.classList.toggle("reduzida", false);
    frameSetaParaCima.classList.toggle("reduzida", false);
    setaParaBaixo.classList.toggle("flex", false);
    setaParaBaixo.classList.toggle("reduzida", false);
    setaParaCima.classList.toggle("reduzida", false);
})


//Passando elementos HTML para variáveis JS
const slider = document.querySelector('#slider');
const sliderContent = document.querySelector('#sliderConteudo');
const radioAuto = document.querySelector('#radioAuto');
const arrowLeft = document.querySelector('#arrowLeft');
const arrowRight = document.querySelector('#arrowRight');

// Declarar variáveis globais
let currentPage = 0; // página atual com os primeiros cards
let itemsPerView = 1; // quantos itens cabem na tela ao mesmo tempo
let totalPages = 1; // quantas páginas existem no total
let autoSlideInterval; // "relógio" do slide automático

// Criação/Organização do Carrossel
function updateCarrosel() {
    const sliderWidth = slider.offsetWidth; // largura visível do slider
    const itemWidth = sliderContent.children[0].getBoundingClientRect().width; // largura do primeiro card dentro do slider 
    // (getBoundind.. serve para pegar as dimensões reais do elemento na tela)

    itemsPerView = (sliderWidth / itemWidth); // quantos cards cabem dentro do slider
    totalPages = Math.ceil(sliderContent.children.length / itemsPerView); // divide a quantidade de cards por quantos itens cabem na tela 
    // e arredonda para cima

    createRadioLabel(); // cria novas bolinhas
    updateRadioLabel(); // atualiza a cor verde da bolinha que estiver em destaque
}

// Radio Label
function createRadioLabel() {
    radioAuto.innerHTML='';
    for(let i = 0; i < totalPages; i++) {
        const label = document.createElement('label'); // cria nova bolinha
        label.classList.add('radioLabel'); // adiciona a classe a bolinha nova
        if(i == 0) {
            label.classList.add("active"); // primeira bolinha sempre ativa de início
        }
        label.addEventListener('click', () => {
            currentPage = i; // muda a página atual (página atual = bolinha clicada)
            scrollToPage(); // move o carrossel para a página clicada
        });
        radioAuto.appendChild(label);
    }
}

function updateRadioLabel() {
    const labels = document.querySelectorAll('.radioLabel');
    labels.forEach((label, i) => {
        label.classList.toggle('active', i === currentPage); // Se i === currentPage => adiciona .active, se não remove
    });
}

// Movimentação
function scrollToPage() {
    const newPosition = sliderContent.offsetWidth * currentPage; // quanto o slider precisa andar
    sliderContent.scrollTo({
        left: newPosition, // mover horizontalmente
        behavior: 'smooth' // suaviza a movimentação
    });

    updateRadioLabel();
    resetAutoSlide();
}

function moveLeft() {
    currentPage--;
    if(currentPage < 0) {
        currentPage = totalPages - 1;
    }
    scrollToPage();
}

function moveRight() {
    currentPage++;
    if(currentPage >= totalPages) {
        currentPage = 0;
    }
    scrollToPage();
}

// Slide Automático
function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        moveRight();
    }, 4000);
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}

// Ouvinte de eventos
arrowLeft.addEventListener('click', moveLeft);
arrowRight.addEventListener('click', moveRight);
window.addEventListener('resize', updateCarrosel); // quando a tela mudar de tamanho, recalcula tudo;

// Chama início das funções
updateCarrosel();
startAutoSlide();