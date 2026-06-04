<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Ghibli</title>
    <link rel="stylesheet" href="../../../public/css/landing-page.css">

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
<body>
    <div id="navbar">
    <?php require('navbar.view.php');?>
    </div>
    <main>

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
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/>
                                </svg>

                </div>
            </div>
        
                
                <div id="framepaddingposts">
                    <div id="seta-para-baixo-hero">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.5vw" height="2.1vw" fill="#4F6F52" id="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg> 
                    </div>
                </div>
                    <div id="postsrecentes"> <!-- Container post e scroll 1 -->

                        <div id="imagemetextopost">  <!-- Container post-->
                            <div id="imagempost">    <!-- Imagem post -->
                                <div id="usuariopost">   <!-- Container informações do post -->
                                    <div id="fotousuariopost"> </div>    <!-- Foto usuário -->
                                    <div id="nomeusuariopost">@usuario </div>   <!-- Nome usuário -->   
                                </div>
                                <div id="tituloecurtidaspost">   <!-- Container título e favoritos-->
                                        <div id="textoemdestaque">Em destaque: </div>     <!-- Título -->
                                        <div id="iconespost"> 

                                         <!-- Favoritos-->
                                            <svg xmlns="http://www.w3.org/2000/svg" id="vetor-favoritar-carrossel" viewBox="0 0 16 16">
                                            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                                            </svg>
                                        </svg> 
                                    
                                    </div>    
                                </div>
                            </div>

                            <div id="textodescricaopost"> A beleza em "a Viagem de Chihiro"!
                            </div>  <!-- Texto post -->
                        </div>


                        <div id="scrollpost"> <!-- Container scroll de posts -->
                            <div id="fundoscrollpost">

                                <!-- seta para cima -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="seta-scroll" id="seta-cima-scroll" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/>
                                </svg>

                                <!-- circulos -->

                                <svg xmlns="http://www.w3.org/2000/svg" class="circulo-scroll" id="circulo-scroll-1" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" class="circulo-scroll" id="circulo-scroll-2" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                                </svg>                                

                                <svg xmlns="http://www.w3.org/2000/svg" class="circulo-scroll" id="circulo-scroll-3" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                                </svg>                                

                                <svg xmlns="http://www.w3.org/2000/svg" class="circulo-scroll" id="circulo-scroll-4" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg"  class="circulo-scroll" id="circulo-scroll-5" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                                </svg>                                

                                <!-- seta para baixo -->

                                <svg xmlns="http://www.w3.org/2000/svg" class="seta-scroll" id="seta-baixo-scroll" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>

                            </div> <!-- Fundo scroll -->
                            <div id="botaovermaispost">
                                <svg xmlns="http://www.w3.org/2000/svg" id="vermais-vetor" viewBox="0 0 16 16">
                                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                                </svg>
                            </div> <!-- Botão de ver mais -->
                        </div>


                    </div>
                </div>
        </section>

    </main>
    <script src="../../../public/js/landing-page.js"></script>
</body>
</html>