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
    <main  class="LandingPageMain">
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
                            <div class="sliderItem">
                                <div class="usercontainer">
                                    <img src="../../../public/assets/graveofthefireflies.png"> 
                                    <p class="username">@usuario</p>
                                </div>
                                <img class ="imagempostcarrossel" src="../../../public/assets/porcorosso.jpg">
                                <div class="gradientepostcarrossel"></div>
                                <div class="descricaopostcarrossel">
                                    <p> A magia cotidiana dos filmes do Studio Ghibli e como suas histórias continuam encantando diferentes gerações ao redor do mundo </p>
                                </div>
                            </div>
                            <div class="sliderItem">
                                <div class="usercontainer">
                                    <img src="../../../public/assets/graveofthefireflies.png"> 
                                    <p class="username">@usuario</p>
                                </div>
                                <img class ="imagempostcarrossel" src="../../../public/assets/porcorosso.jpg">
                                <div class="gradientepostcarrossel"></div>
                                <div class="descricaopostcarrossel">
                                    <p> A magia cotidiana dos filmes do Studio Ghibli e como suas histórias continuam encantando diferentes gerações ao redor do mundo </p>
                                </div>
                            </div>
                            <div class="sliderItem">
                                <div class="usercontainer">
                                    <img src="../../../public/assets/graveofthefireflies.png"> 
                                    <p class="username">@usuario</p>
                                </div>
                                <img class ="imagempostcarrossel" src="../../../public/assets/porcorosso.jpg">
                                <div class="gradientepostcarrossel"></div>
                                <div class="descricaopostcarrossel">
                                    <p> A magia cotidiana dos filmes do Studio Ghibli e como suas histórias continuam encantando diferentes gerações ao redor do mundo </p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="slideremdestaque"></div>

                        <div class="sliderRight">
                            <div class="fundosliderright">
                            <svg xmlns="http://www.w3.org/2000/svg" class="navArrow arrowLeft" id="arrowLeft" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
                            </svg>
                            <div class="radioAuto" id="radioAuto"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="navArrow arrowRight" id="arrowRight" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </div>
                        </div>

                    </div>




                </div>
                <!-- <div id="postsrecentes"> 

                        <div id="imagemetextopost">  
                            <div id="imagempost">   
                                
                                <img class="imagemcarrossel" id="imagemcarrossel1" src="../../../public/assets/dragao.jpg">
                                <img class="imagemcarrossel" id="imagemcarrossel2" src="../../../public/assets/viagemdechihiro1920certo.png">
                                <img class="imagemcarrossel" id="imagemcarrossel3" src="../../../public/assets/princesamonoke.jpg">
                                <img class="imagemcarrossel" id="imagemcarrossel4" src="../../../public/assets/porcorosso.jpg">
                                <img class="imagemcarrossel" id="imagemcarrossel5" src="../../../public/assets/casteloanimado.jpg">
                                <div id="usuariopost">   Container informações do post 
                                    <div id="fotousuariopost"> </div>   Foto usuário 
                                    <div id="nomeusuariopost">@usuario </div>    Nome usuário   
                                </div>
                                <div id="tituloecurtidaspost">    Container título e favoritos
                                        <div id="textoemdestaque">Em destaque: </div>      Título -
                                        <div id="iconespost"> 
                                    
                                    </div>    
                                </div>
                            </div>

                            <div id="textodescricaopost"> A beleza em "a Viagem de Chihiro"!
                            </div>  Texto post
                        </div> -->




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