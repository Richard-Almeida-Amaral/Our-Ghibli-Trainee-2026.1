const slides = document.querySelectorAll('.slider-item');
const sliderContent = document.querySelector('.slider-conteudo');
const radioAuto = document.querySelector('.fundoscrollpost');
const downArrow = document.querySelector('.seta-baixo-scroll');
const upArrow = document.querySelector('.seta-cima-scroll');

let currentPage = 0;
let totalPages = 5;
let autoSlideInterval;

function updateCarrossel()
{
    const offset = -currentPage * 100;
    sliderContent.style.transform = 'translateX(${offset}%)';
    createRadioLabel();
    updateRadioLabel();
}

function createRadioLabel()
{

    radioAuto.innerHTML = " ";
    for ( let i = 0; i < totalPages; i++)
    {

        const label = document.createElement('div');
        label.classList.add('radio-label');
        if (i === 0)
        {

            label.classList.add('active');

        }
        label.addEventListener('click', () => {
            currentPage = i;
            updateCarrossel();
            resetAutoSlide();
        })
        radioAuto.appendChild(label);
    }


}

function updateRadioLabel()
{
    const label = document.querySelectorAll('radio-label');
    labels.forEach( (l, i) => {
        l.classList.toggle('active', i === currentPage )
    });
}

function moveLeft()
{

    currentPage = (currentPage - 1 + totalPages) % totalPages;
    updateCarrossel();
    resetAutoSlide();
}

function moveRight()
{

    currentPage = (currentPage + 1) % totalPages;
    updateCarrossel();
    resetAutoSlide();

}

function startAutoSlide()
{

    autoSlideInterval = setInterval ( ()=> {
        moveRight();
    }, 4000)
}

function resetAutoSlide()
{

    clearInterval(autoSlideInterval);
    startAutoSlide();

}

downArrow.addEventListener('click', moveLeft);
upArrow.addEventListener('click', moveRight);
window.addEventListener('resize', updateCarrossel);

updateCarrossel();
startAutoSlide();