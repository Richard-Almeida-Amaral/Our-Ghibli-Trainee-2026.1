<head>
  <link rel="stylesheet" href="../../../../public/css/admin/modaisPosts/postEditar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- modal Editar post -->
<div class="PEditarContainer" id="PEditar">
  <form action="" method="POST">

    <div class="PEditarHeader">
      <h1 class="PEditartittle">Editar Publicação</h1>
      <button type="button" class="fechax" onclick="fecharModal('PEditar')">&times</button>
    </div>  

    <div class="PEditarBody">
      <div class="PEditarLeft">
        <div id="imagempostmodaledit">
          <label for="uploadimagemmodaledit" id="botaouploadmodaledit">
          <svg xmlns="http://www.w3.org/2000/svg" id="iconeuploadmodaledit" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z" />
          </svg>
      </label>
      <input type='file' accept="image/*" id="uploadimagemmodaledit" hidden>
    </div>
      </div>

      <div class="PEditarRight">

        <div class="PEditarareas">
          <label for="">Título</label>
          <input type="text" name="titulo" id="" placeholder="<?=$publicacao->titulo ?>" class="PEditarinput" value="<?=$publicacao->titulo?>">
        </div>

        <div class="PEditarareas">
          <label for="">Autor</label>
          <input type="text" name="usuarios_id" id="" placeholder="<?=$posts->usuarios_id ?>" class="PEditarinput" value="<?=$posts->usuarios_id ?>">
        </div>

        <div class="PEditarareas">
          <label for="">Data</label>
          <input type="text" name="data" id="" placeholder="<?=$posts->data ?>" class="PEditarinput" value="<?=$posts->data ?>">
        </div>

        <div class="PEditarareas">
          <label for="">Descricao</label>
          <textarea name="descricao" id="" class="PEditarTextArea" class="PEditarinput">
          <?= $posts->descricao ?>
        </textarea>
        </div>

      </div>
    </div>
    <script src="../../../public/js/Modais.js"></script>
  </form>
</div>