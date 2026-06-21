<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postEditar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- modal Editar post -->
<div class="PEditarContainer modoverlay" id="PEditar<?=$publicacao->id?>">
  <form action="/admin/posts/edit" method="POST" class="PEditarForm">

    <div class="PEditarHeader">
      <h1 class="PEditartittle">Editar Publicação</h1>
    </div>  

    <div class="PEditarBody">
      <div class="PEditarLeft">
        <div class="PEditarCard">
          <?php
            $imagem = '/' . $publicacao->imagem;
            ?>
              <img src="<?= $imagem ?>" alt="<?= $publicacao->titulo ?>" class="PEditarIMG"/>
              <div class="PEditarplacetxt">
                <h1 class="PEditartxt"><?= $publicacao->titulo ?></h1>
                <p class="PEditartxt">
                  <?= $publicacao->descricao ?>
                </p>
              </div>
          
        </div>
      </div>

      <div class="PEditarRight">
        <div class="PEditarareas">
          <label class="PEditarlabel">Id</label>
          <input type="number" name="id" id="" placeholder="<?= $publicacao->id ?>" value="<?= $publicacao->id ?>" class="PEditarinput">
        </div>

        <div class="PEditarareas">
          <label class="PEditarlabel">Título</label>
          <input type="text" name="titulo" id="" placeholder="<?= $publicacao->titulo ?>" value="<?= $publicacao->titulo ?>" class="PEditarinput">
        </div>

        <div class="PEditarareas">
          <label class="PEditarlabel">Autor</label>
          <input type="text" name="autor" id="" placeholder="<?= $publicacao->autor ?>" value="<?= $publicacao->autor ?>" class="PEditarinput">
        </div>

        <div class="PEditarareas">
          <label class="PEditarlabel">Data</label>
          <input type="text" name="data" id="" placeholder="<?= $publicacao->dataformatada ?>" value="<?= $publicacao->dataformatada ?>" class="PEditarinput" disabled>
        </div>

        <div class="modalAcoes">
          <button class="btnCancelar" type="button" onclick="fecharModal('PEditar<?=$publicacao->id?>')">
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