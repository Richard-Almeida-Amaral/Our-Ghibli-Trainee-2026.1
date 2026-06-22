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

            
            <div class="ContPosts">
                <div class="TopoPosts">
                    <div class="Usuarioposts">
                        <div class="NomeUsuarioPosts">
                            <?php if(isset($publicacoes->autor)): ?>
                            
                            <p>@<?= $publicacoes->autor ?></p>
                            
                            <?php else: ?>
                            
                            <p>@<?= $publicacoes->usuarios_id ?></p>
                            
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="DataPosts">
                        <div class="DatatitPosts">
                            <p>Data: </p>
                        </div> 
                        <div class="Diatextoposts">
                            <p><?=$publicacoes->data ?></p>
                        </div>
                    </div>
                </div>


                <div class="Infoposts">
                    <div class="TitEImgPosts">
                        
                        <div class="TituloPosts">
                            <h2 class="PostsTitle"> <?=$publicacoes->titulo ?></h2>
                        </div>
                        <?php $imagem = '/' . $publicacoes->imagem; ?>
                        <div class="ImgPosts">
                            <img src="<?= $imagem ?>" alt="<?=$publicacoes->titulo ?>">
                        </div>


                    </div>
                    <div class="TextoPostsCont">
                        <div class="TextoPosts">
                            <p> <?= $publicacoes->descricao ?>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div id="footer">
    <?php require('footer.view.php');?>
    </div>
</body>
</html>
