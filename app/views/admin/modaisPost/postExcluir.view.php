<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postExcluir.css"/>
</head>

<!-- Modal de Exclusão -->
<div class="modalContainer" id="ModalExcluir">
  <form action="" method="">
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
      <button class="btnNao" onclick="fecharModal('ModalExcluir')">
        Não
      </button>
      <button class="btnSim">
        Sim
      </button>
    </div>
  </form>
  <script src="../../../public/js/Modais.js"></script>
</div>