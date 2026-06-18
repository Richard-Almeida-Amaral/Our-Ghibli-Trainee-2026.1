<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postEditar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- modal Editar post -->
<div class="PEditarContainer" id="PEditar">
  <form action="" method="POST" class="PEditarForm">

    <div class="PEditarHeader">
      <h1 class="PEditartittle">Editar Publicação</h1>
      <button type="button" class="fechax" onclick="fecharModal('PEditar')">&times</button>
    </div>  

    <div class="PEditarBody">
      <div class="PEditarLeft">
        <div class="PEditarCard">
          <a href="/post" class="PEditarAncora">
              <img src="../../../public/assets/Totoro.webp" alt="" class="PEditarIMG"/>
              <div class="PEditarplacetxt">
                <h1 class="PEditartxt">Meu Amigo Totoro</h1>
                <p class="PEditartxt">
                  Lorem ipsum é um texto de preenchimento comumente usado nas
                  indústrias gráficas, de impressão e editoriais para pré-Editar
                  layouts e maquetes visuais.Lorem ipsum é um texto de preenchimento comumente usado nas
                  indústrias gráficas, de impressão e editoriais para pré-Editar
                  layouts e maquetes visuais.Lorem ipsum é um texto de preenchimento comumente usado nas
                  indústrias gráficas, de impressão e editoriais para pré-Editar
                  layouts e maquetes visuais.
                </p>
              </div>
          </a>
        </div>
      </div>

      <div class="PEditarRight">
        <div class="PEditarareas">
          <label class="PEditarlabel">Id</label>
          <input type="number" name="" id="" placeholder="codigo" class="PEditarinput">
        </div>

        <div class="PEditarareas">
          <label class="PEditarlabel">Título</label>
          <input type="text" name="" id="" placeholder="Título" class="PEditarinput">
        </div>

        <div class="PEditarareas">
          <label class="PEditarlabel">Autor</label>
          <input type="text" name="" id="" placeholder="Autor" class="PEditarinput">
        </div>

        <div class="PEditarareas">
          <label class="PEditarlabel">Data</label>
          <input type="text" name="" id="" placeholder="Data" class="PEditarinput">
        </div>

        <div class="modalAcoes">
        <button class="btnCancelar"type="button" onclick="fecharModal('ModalCriar')">
          Cancelar
        </button>
        <button class="btnCriar" type="submit">
          Criar
        </button>
      </div>

      </div>
    </div>
    <script src="../../../public/js/Modais.js"></script>
  </form>
</div>