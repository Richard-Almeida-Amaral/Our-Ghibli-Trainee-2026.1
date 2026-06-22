<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postExcluir.css"/>
</head>

<!-- Modal de Exclusão -->
<div class="modalContainerExc" id="ModalExcluir<?= $publicacao->id ?>">
  <form action="/admin/posts/excluir" method="POST">
    <input type="hidden" name="id" value="<?= $publicacao->id ?>">
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
      <button class="btnNao" type="button" onclick="fecharModal('ModalExcluir<?= $publicacao->id ?>')">
        Não
      </button>
      <button class="btnSim" type="submit">
        Sim
      </button>
    </div>
  </form>
  <script src="../../../public/js/Modais.js"></script>
</div>