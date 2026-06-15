<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postVisualizar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- modal visualizar post -->
<div class="PvisualizarContainer" id="Pvisualizar">
  <form action="" method="POST">

    <div class="PVisualizarHeader">
      <h1 class="PVisualizartittle">Visualizar Publicação</h1>
      <button type="button" class="fechax" onclick="fecharModal('Pvisualizar')">&times</button>
    </div>  

    <div class="PVisualizarBody">
      <div class="PVisualizarLeft">
        <img src="/<?= $post->imagem ?>" alt="Imagem do Post"  class="PVisualizarIMG">
      </div>

      <div class="PVisualizarRight">
        <div class="PVisualizarareas">
          <label for="">Id</label>
          <input type="number" name="id" id="" placeholder="<?= $publicacao->id ?>" class="PVisualizarinput" disabled value="<?= $publicacao->id ?>">
        </div>

        <div class="PVisualizarareas">
          <label for="">Título</label>
          <input type="text" name="titulo" id="" placeholder="<?= $publicacao->titulo ?>" class="PVisualizarinput" disabled value="<?= $publicacao->titulo ?>">
        </div>

        <div class="PVisualizarareas">
          <label for="">Autor</label>
          <input type="text" name="usuarios_id" id="" placeholder="<?= $publicacao->autor ?>" class="PVisualizarinput" disabled value="<?= $publicacao->autor ?>">
        </div>

        <div class="PVisualizarareas">
          <label for="">Data</label>
          <input type="text" name="data" id="" placeholder="<?= $publicacao->dataformatada ?>" class="PVisualizarinput" disabled value="<?= $publicacao->dataformatada ?>">
        </div>

        <div class="PVisualizarareas">
          <label for="">Descricao</label>
          <textarea name="descricao" id="" class="PVisualizarTextArea" class="PVisualizarinput" disabled> 
          <?=$publicacao->descricao ?>
        </textarea>
        </div>

      </div>
    </div>
    <script src="../../../public/js/Modais.js"></script>
  </form>
</div>