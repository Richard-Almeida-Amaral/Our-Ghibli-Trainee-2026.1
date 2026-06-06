const botaoabreeditpost = document.getElementById("botaoabrireditpost");
const botaoabreviewpost = document.getElementById("botaoabrirviewpost");
const containermodaleditpost = document.getElementById("containermodaledit");
const containermodalviewpost = document.getElementById("containermodalview");
const filtromodaledit = document.getElementById("filtromodaledit");
const filtromodalview = document.getElementById("filtromodalview");
const botaofecharmodaledit = document.getElementById("botaocancelaredit");
const botaofecharmodalview = document.getElementById("containerxmodalviewpost")

botaoabreeditpost.addEventListener("click", () => {
    filtromodaledit.classList.add("aberto");
    containermodaleditpost.classList.add("aberto");
})

botaofecharmodaledit.addEventListener("click", () => {
    containermodaleditpost.classList.remove("aberto");
    filtromodaledit.classList.remove("aberto");
})

botaoabreviewpost.addEventListener("click", () => {
    filtromodalview.classList.add("aberto");
    containermodalviewpost.classList.add("aberto");
})

botaofecharmodalview.addEventListener("click", () => {
    containermodalviewpost.classList.remove("aberto");
    filtromodalview.classList.remove("aberto");
})
