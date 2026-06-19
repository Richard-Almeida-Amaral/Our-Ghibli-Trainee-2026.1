<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet">

  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Alice&display=swap"
    rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
    rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet" />

  <!-- Seu CSS por último -->
  <link rel="stylesheet" href="../../../public/css/site/paginacao.css">
  <link rel="stylesheet" href="../../../public/css/site/paginaPosts.css" />

  <title>Página de Posts</title>
</head>

<body>
  <div id="navbar">
    <?php require('navbar.view.php'); ?>
  </div>
  <main>
    <!-- Section do topo da página, onde tem o título e a barra de pesquisa -->
    <section>
      <div class="topoPaginaDePosts">
        <h1>Publicações</h1>
        <form action="">
          <input type="text" id="pesquisa" placeholder="Pesquisar" />
        </form>

        <!-- input de pesquisa -->
      </div>
    </section>

    <!-- Section do conteúdo, onde tem os cards de cada publicação -->
    <section class="conteudo">
      <!-- container com os cards de cada publicação, onde tem a imagem, o título e a descrição de cada publicação -->
      <div class="Postcontainer">
        <?php if (!empty($posts)): ?>
          <?php foreach ($posts as $post): ?>

            <?php
            $imagem = '/' . $post->imagem;
            ?>
            <a href="/post?id=<?= $post->id ?>" class="ancoraPost">
              <div class="card">
                <img
                  src="<?= $imagem ?>"
                  alt="<?= $post->titulo ?>">
                <h1><?= $post->titulo ?></h1>
                <p><?= $post->descricao ?></p>
              </div>
            </a>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="sem-resultados">
            Nenhuma publicação encontrada.
          </p>
        <?php endif; ?>
      </div>
    </section>
    <!-- Paginação -->
    <?php require(__DIR__ . '/../site/paginacao.php') ?>
  </main>
  <div id="footer">
    <?php require('footer.view.php'); ?>
  </div>
</body>

</html>