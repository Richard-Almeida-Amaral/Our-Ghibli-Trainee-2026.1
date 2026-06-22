<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Ghibli</title>
    <link rel="stylesheet" href="../../../public/css/site/landingPage.css">

    <!-- Fonte Alice -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">

    <!-- Fonte Nunito (weight entre 200 e 1000) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <!-- Fonte Quicksand (weight entre 300 e 700) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">


</head>

<body class="LandingPageBody">
    <main class="LandingPageMain">
        <div class="" id="navbar">
            <?php require('navbar.view.php'); ?>
        </div>
        <section id="hero"> <!-- Hero card -->

            <section id="frametextofilme"> <!-- texto filme + logo -->

                <h2>“O mundo é mágico quando visto com olhos sinceros.”</h2>

            </section>
        </section>

        <section id="homelanding"> <!-- Seta + Página de Posts -->
            <div id="gradientehome">

                <div id="framesetahero"> <!-- Seta -->
                    <div id="seta-para-cima-hero">

                        <svg xmlns="http://www.w3.org/2000/svg" width="2.5vw" height="2.1vw" fill="#4F6F52" id="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
                        </svg>

                    </div>
                </div>


                <div id="framepaddingposts">
                    <div id="seta-para-baixo-hero">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.5vw" height="2.1vw" fill="#4F6F52" id="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                        </svg>
                    </div>
                </div>

                <div class="carrossel">

                    <div class="slider" id="slider">

                        <div class="sliderConteudo" id="sliderConteudo">

                            <?php foreach ($posts as $post): ?>

                                <div class="sliderItem">
                                    <div class="usercontainer">
                                        <p class="username">@<?= $post->autor ?></p>
                                    </div>

                                    <img
                                        class="imagempostcarrossel"
                                        src="/<?= $post->imagem ?>"
                                        alt="<?= $post->titulo ?>">

                                    <div class="gradientepostcarrossel">
                                        <div class="descricaopostcarrossel">
                                            <?= $post->descricao ?>
                                        </div>
                                    </div>


                                </div>

                            <?php endforeach; ?>

                        </div>
                        <div class="slideremdestaque"></div>

                        <div class="sliderRight">
                            <div class="fundosliderright">
                                <svg xmlns="http://www.w3.org/2000/svg" class="navArrow arrowLeft" id="arrowLeft" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                                </svg>
                                <div class="radioAuto" id="radioAuto"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="navArrow arrowRight" id="arrowRight" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
    </main>
    <div id="footer">
        <?php require('footer.view.php'); ?>
    </div>
    <script src="../../../public/js/landingPage.js"></script>
</body>

</html>