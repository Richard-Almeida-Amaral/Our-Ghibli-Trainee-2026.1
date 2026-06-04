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



