<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postVisualizar.css" />
  <title>Modais Visualizar e Editar Posts</title>

  <!-- Alice -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet" />
  <!-- Quicksand -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet" />

  <!-- Nunito -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet" />

  <!----------------------------------------------------------------------------------------------->
</head>


<body>

  <!-- modal visualizar post -->
  <div id="filtromodalview">
    <<form action="" method="POST" id="containermodalview">

      <section id="frametitulomodalview">
        <div id="titulomodalview">Visualização de Publicação</div>
        <button id="containerxmodalviewpost" onclick="fecharModal('containermodalview','filtromodalview')">
          <svg xmlns="http://www.w3.org/2000/svg" class="xmodalviewpost" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
          </svg>
        </button>
      </section>

      <section id="conteudomodalview">
        <div id="imagempostmodalview"></div>
        <div id="tituloedescricaomodalview">
          <div id="frametitulopostmodalview">
            <div id="titulopostmodalview">
              A magia cotidiana dos filmes do Studio Ghibli e como suas histórias continuam encantando diferentes gerações ao redor do mundo.
            </div>
          </div>
          <div id="framedescricaomodalview">
            <div id="descricaomodalview">
              Os filmes do Studio Ghibli conquistaram milhões de fãs ao unir fantasia, emoção e reflexões profundas sobre humanidade, natureza
              e amadurecimento. Com personagens marcantes, trilhas sonoras inesquecíveis e animações artesanais impressionantes, obras como A Viagem de Chihiro e Meu Amigo
              Totoro transformaram o estúdio em referência mundial da animação. Neste artigo, exploramos os elementos que tornam os filmes Ghibli experiências tão sensíveis,
              acolhedoras e atemporais para públicos de todas as idades.
            </div>
          </div>
        </div>
      </section>
  </div>
  </form>

  <script src="../../../public/js/Modais.js"></script>
</body>

</html>