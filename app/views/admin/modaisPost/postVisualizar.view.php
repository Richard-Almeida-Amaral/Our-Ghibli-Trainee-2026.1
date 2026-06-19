<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postVisualizar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- modal visualizar post -->
<div class="PvisualizarContainer" id="Pvisualizar<?=$publicacao->id?>">
  <form action="" method="POST" class="PVisualizarForm">

    <div class="PVisualizarHeader">
      <h1 class="PVisualizartittle">Visualizar Publicação</h1>
      <button type="button" class="fechax" onclick="fecharModal('Pvisualizar<?=$publicacao->id?>')">&times</button>
    </div>  

    <div class="PVisualizarBody">
      <div class="PVisualizarLeft">
        <div class="PVisualizarCard">
          <a href="/post" class="PVisualizarAncora">
              <img src="/<?= $publicacao->caminhoimagem ?>" alt="" class="PVisualizarIMG"/>
              <div class="PVisualizarplacetxt">
                <h1 class="PVisualizartxt"><?= $publicacao->titulo ?></h1>
                <p class="PVisualizartxt">
                  <?= $publicacao->descricao ?>
              </p>
              </div>
          </a>
        </div>
      </div>

      <div class="PVisualizarRight">
        <div class="PVisualizarareas">
          <label class="PVisualizarlabel">Id</label>
          <input type="number" name="id" id="" placeholder="<?= $publicacao->id ?>" class="PVisualizarinput" value="<?= $publicacao->id ?>" disabled>
        </div>

        <div class="PVisualizarareas">
          <label class="PVisualizarlabel">Título</label>
          <input type="text" name="titulo" id="" placeholder="<?= $publicacao->titulo ?>" class="PVisualizarinput" value="<?= $publicacao->titulo ?>" disabled>
        </div>

        <div class="PVisualizarareas">
          <label class="PVisualizarlabel">Autor</label>
          <input type="text" name="autor" id="" placeholder="<?= $publicacao->autor ?>" class="PVisualizarinput" value="<?= $publicacao->autor ?>" disabled>
        </div>

        <div class="PVisualizarareas">
          <label class="PVisualizarlabel">Data</label>
          <input type="text" name="data" id="" placeholder="<?= $publicacao->dataformatada ?>" class="PVisualizarinput" value="<?= $publicacao->dataformatada ?>" disabled>
        </div>

      </div>
    </div>
    <script src="../../../public/js/Modais.js"></script>
  </form>
</div>