<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postVisualizar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- modal visualizar post -->
<div class="PvisualizarContainer" id="Pvisualizar">
  <form action="" method="POST" class="PVisualizarForm">

    <div class="PVisualizarHeader">
      <h1 class="PVisualizartittle">Visualizar Publicação</h1>
      <button type="button" class="fechax" onclick="fecharModal('Pvisualizar')">&times</button>
    </div>  

    <div class="PVisualizarBody">
      <div class="PVisualizarLeft">
        <div class="PVisualizarCard">
          <a href="/post" class="PVisualizarAncora">
              <img src="../../../public/assets/Totoro.webp" alt="" class="PVisualizarIMG"/>
              <div class="PVisualizarplacetxt">
                <h1 class="PVisualizartxt">Meu Amigo Totoro</h1>
                <p class="PVisualizartxt">
                  Lorem ipsum é um texto de preenchimento comumente usado nas
                  indústrias gráficas, de impressão e editoriais para pré-visualizar
                  layouts e maquetes visuais.Lorem ipsum é um texto de preenchimento comumente usado nas
                  indústrias gráficas, de impressão e editoriais para pré-visualizar
                  layouts e maquetes visuais.Lorem ipsum é um texto de preenchimento comumente usado nas
                  indústrias gráficas, de impressão e editoriais para pré-visualizar
                  layouts e maquetes visuais.
                </p>
              </div>
          </a>
        </div>
      </div>

      <div class="PVisualizarRight">
        <div class="PVisualizarareas">
          <label class="PVisualizarlabel">Id</label>
          <input type="number" name="" id="" placeholder="codigo" class="PVisualizarinput" disabled>
        </div>

        <div class="PVisualizarareas">
          <label class="PVisualizarlabel">Título</label>
          <input type="text" name="" id="" placeholder="Título" class="PVisualizarinput" disabled>
        </div>

        <div class="PVisualizarareas">
          <label class="PVisualizarlabel">Autor</label>
          <input type="text" name="" id="" placeholder="Autor" class="PVisualizarinput" disabled>
        </div>

        <div class="PVisualizarareas">
          <label class="PVisualizarlabel">Data</label>
          <input type="text" name="" id="" placeholder="Data" class="PVisualizarinput" disabled>
        </div>

      </div>
    </div>
    <script src="../../../public/js/Modais.js"></script>
  </form>
</div>