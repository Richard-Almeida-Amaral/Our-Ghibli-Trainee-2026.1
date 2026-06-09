const inputPesquisa = document.getElementById("pesquisa");
const cards = document.querySelectorAll(".card");

inputPesquisa.addEventListener("keyup", function () {
const termoBusca = inputPesquisa.value.toLowerCase();

cards.forEach(function (card) {
    const titulo = card.querySelector("h1").textContent.toLowerCase();
    const paragrafo = card.querySelector("p").textContent.toLowerCase();

    if (titulo.includes(termoBusca) || paragrafo.includes(termoBusca)) {
    card.style.display = "";
    } else {
    card.style.display = "none";
    }
});
});
