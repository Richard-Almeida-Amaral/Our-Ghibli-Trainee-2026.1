<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postExcluir.css" />
  <!---------------------------- Fontes ----------------------------------------------------------->

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
  <title>ModalCriar</title>
</head>

<body>

  <!-- Modal de Exclusão -->

  <form action="" method="POST" class="modalContainer" id="ModalExcluir">

    <div class="ModalContainerExcuir">
      <div class="modalHeaderExcluir">
        <h2>Exclusão de Publicação</h2>
      </div>
      <div class="modalBodyExcluir">
        <img class="lixeira" src="../../../public/assets/disposicao.png" alt="">
        <p>Deseja excluir esta publicação?</p>
      </div>
    </div>

    <!-- Botões inferiores Exclusão -->
    <div class="modalAcoesExcluir">
      <button class="btnNao" onclick="fecharModalCriar('ModalExcluir')">
        Não
      </button>
      <button class="btnSim">
        Sim
      </button>
    </div>
  </form>

</body>
<script src="../../../public/js/Modais.js"></script>

</html>