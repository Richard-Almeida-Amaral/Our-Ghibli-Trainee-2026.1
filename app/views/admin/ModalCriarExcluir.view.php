<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../../public/css/ModalCriarExcluir.css" />
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
  <section class="TituloModal">
    <div>
      <div class="modalBtn">

        <button class="btnCriar" onclick="abrirModalCriar('modalCriar')">
          Adicionar Publicação
        </button>
        <button class="btnExcluir" onclick="abrirModalCriar('modalExcluir')">
          Excluir Publicação
        </button>
      </div>
    </div>
  </section>

  <!-- MODAL CRIAÇÃO  -->
  <section class="criarModal" id="modalCriar" style="display: none;">
    <div class="modalContainer">

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
        <button class="btnCancelar" onclick="fecharModalCriar('modalCriar')">
          Cancelar
        </button>
        <button class="btnCriar">
          Criar
        </button>
      </div>

    </div>
  </section>

  <!-- Modal de Exclusão -->

  <section class="criarModal" id="modalExcluir" style="display: none;">
    <div class="modalContainer" id="modalExcluir">

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
        <button class="btnNao" onclick="fecharModalCriar('modalExcluir')">
          Não
        </button>
        <button class="btnSim">
          Sim
        </button>
      </div>

    </div>
  </section>

</body>
<script src="../../../public/js/ModalCriarExcluir.js"></script>

</html>