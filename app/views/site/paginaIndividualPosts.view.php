<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Individual de Posts</title>
    <link rel="stylesheet" href="../../../public/css/site/paginaIndividualPosts.css">


    <!-- Alice -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Alice&display=swap"
    rel="stylesheet"
    />


    <!-- Quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
    rel="stylesheet"
    />


    <!-- Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet"
    />
    <div id="navbar">
    <?php require('navbar.view.php');?>
    </div>
    <main class="PIP-Main">
        <section class="PIP-Topo">
            <img src="../../../public/assets/TopoPip.png" alt="">
        </section>
        <section class="PIP-Meio">
            <?php foreach ($publicacoes as $publicacao): ?>

            <?php $imagem = '/' . $publicacao->imagem; ?>
            <div class="ContPosts">
                <div class="TopoPosts">
                    <div class="Usuarioposts">
                        <!-- <img src="../../../public/assets/Foto (1).png" alt=""> -->
                        <div class="NomeUsuarioPosts">
                            <p>@<?= $publicacao->autor ?></p>
                        </div>
                    </div>
                    <div class="DataPosts">
                        <div class="DatatitPosts">
                            <p>Data: </p>
                        </div>
                        <div class="Diatextoposts">
                            <p><?= $publicacao->dataformatada ?></p>
                        </div>
                    </div>
                </div>


                <div class="Infoposts">
                    <div class="TitEImgPosts">
                        
                        <div class="TituloPosts">
                            <h2 class="PostsTitle"> <?= $publicacao->titulo ?></h2>
                        </div>
                        
                        <div class="ImgPosts">
                            <img src="<?= $imagem ?>" alt="<?= $publicacao->titulo ?>">
                        </div>


                    </div>
                    <div class="TextoPostsCont">
                        <div class="TextoPosts">
                            <p> <?= $publicacao->descricao ?>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </section>
    </main>
    <div id="footer">
    <?php require('footer.view.php');?>
    </div>
</body>
</html>
