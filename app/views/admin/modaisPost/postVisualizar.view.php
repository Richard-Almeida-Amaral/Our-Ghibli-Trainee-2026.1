<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postVisualizar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- modal visualizar post -->
<form action="" method="POST" class="PvisualizarContainer">

  <div class="PVisualizarHeader">
    <h1 class="PVisualizartittle">Visualizar Publicação</h1>
  </div>

  <div class="PVisualizarBody">
    <div class="PVisualizarLeft">
        <img src="../../../../public/assets/Totoro.webp" alt="" class="PVisualizarIMG">
    </div>

    <div class="PVisualizarRight">
      <div class="PVisualizarareas">
        <label for="">Id</label>
        <input type="number" name="" id="" placeholder="codigo" class="PVisualizarinput">
      </div>

      <div class="PVisualizarareas">
        <label for="">Título</label>
        <input type="text" name="" id="" placeholder="Título" class="PVisualizarinput">
      </div>
      
      <div class="PVisualizarareas">
        <label for="">Autor</label>
        <input type="text" name="" id="" placeholder="Autor" class="PVisualizarinput">
      </div>
      
      <div class="PVisualizarareas">
        <label for="">Data</label>
        <input type="text" name="" id="" placeholder="Data" class="PVisualizarinput">
      </div>
      
      <div class="PVisualizarareas">
        <label for="">Descricao</label>
        <textarea name="" id="" class="PVisualizarTextArea" class="PVisualizarinput">
          Descricao
        </textarea>
      </div>
    
    </div>
  </div>
  <script src="../../../public/js/Modais.js"></script>
</form>