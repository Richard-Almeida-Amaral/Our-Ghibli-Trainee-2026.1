<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postCriar.css">
</head>
<!-- MODAL CRIAÇÃO  -->
<div id="PCriarfiltro">
  <div class="modalContainer" id="ModalCriar">
    <form action="" method="">
      <div class="modalHeader">
        <h2>Criação de Publicação</h2>
      </div>
      <div class="modalBody">
        <label class="arquivo">
          <input type="file" accept="image/*" />
          <div class="arquivo-content">
            <svg class="upload-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M17 8l-5-5-5 5M12 3v12" />
            </svg>
            <span>Faça upload da imagem</span>
          </div>
        </label>

        <div class="containerTextos">
          <div class="topoDescricao">

          </div>
          <label class="labelInput">
            <textarea placeholder="Escreva seu Título..." class="inputCampo"></textarea>
          </label>
          <label class="labelDescricao">
            <textarea placeholder="Escreva sua Descrição..." class="inputCampoDescricao"></textarea>
          </label>
        </div>
      </div>

      <!-- Botões inferiores Criação -->
      <div class="modalAcoes">
        <button class="btnCancelar" onclick="fecharModal('usuarioCriar')">
          Cancelar
        </button>
        <button class="btnCriar">
          Criar
        </button>
      </div>
      <script src="../../../public/js/Modais.js"></script>
    </form>
  </div>
</div>