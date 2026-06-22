<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postEditar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- modal Editar post -->
<div class="PEditarContainer modoverlay" id="PEditar<?=$publicacao->id?>">
  <form action="/admin/posts/edit" method="POST" class="PEditarForm">
        <input type="hidden" name="usuarios_id" value="<?= $publicacao->usuarios_id ?>">
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
                  <input type="text" name="descricao" id="" placeholder="<?= $publicacao->descricao ?>" value="<?= $publicacao->descricao ?>" class="PEditarinput">
                </p>
              </div>
          
        </div>
      </div>

      <div class="PEditarRight">
        <div class="PEditarareas">
          <label class="PEditarlabel">Id</label>
          <input type="hidden" name="id" value="<?= $publicacao->id ?>">

          <input type="number" value="<?= $publicacao->id ?>" class="PEditarinput" disabled>
        </div>

        <div class="PEditarareas">
          <label class="PEditarlabel">Título</label>
          <input type="text" name="titulo" id="" placeholder="<?= $publicacao->titulo ?>" value="<?= $publicacao->titulo ?>" class="PEditarinput">
        </div>

        <div class="PEditarareas">
          <label class="PEditarlabel">Autor</label>
          <input type="text" name="autor" id="" placeholder="<?= $publicacao->autor ?>" value="<?= $publicacao->autor ?>" class="PEditarinput" disabled>
        </div>

        <div class="PEditarareas">
          <label class="PEditarlabel">Data</label>
          <input type="hidden" name="data" value="<?= $publicacao->data ?>">

          <input type="text" value="<?= $publicacao->dataformatada ?>" class="PEditarinput" disabled>

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