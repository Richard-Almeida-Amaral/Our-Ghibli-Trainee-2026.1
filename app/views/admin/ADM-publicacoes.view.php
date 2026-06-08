<!DOCTYPE html>
<html lang="pt-br" class="ADMP-html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/ADM-publicacoes.css"> <!--impostando o estilo CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--Importando fontes -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet"> 
    <title>Tabela de Posts</title>
</head>
    <!-- importando os modais  -->
<?php require('ModalCriarExcluir.view.php');?>
<?php require('ModalVisualizarPosts.view.php');?>
<body class="ADMP-body">
    <div class="ADMP-up">
        <h1 class="ADMP-tittle">Lista de Publicação</h1>    <!-- Título da Pagina -->
    </div>
    <div class="ADMP-mid">
            <div class="ADMP-searchinput">  <!-- div que engloba icon e input-->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" id="ADMP-searchIcon">  <!-- Ícone Lupa -->
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
            <input type="search" name="" id="" placeholder="Pesquisar..." class="ADMP-searchfield"> 
             </div>
            <input type="button" value="+ Adicionar Publicação" class="ADMP-butom" onclick="InteracaoModal('ModalCriar')"> <!-- botao com onclick JS-->
    </div>

    <div class="ADMP-down">

        <table class="ADMP-table">
            <thead class="ADMP-tableheader">       <!-- Cabecalho -->
                <tr class="ADMP-row" id="ADMP-rowheader">
                    <th class="ADMP-cell">ID</th>
                    <th class="ADMP-cell">TÍTULO</th>
                    <th class="ADMP-cell">AUTOR</th>
                    <th class="ADMP-cell">DATA</th>             
                    <th class="ADMP-cell">ÍCONES</th>
                </tr>
            </thead>
            <tbody class="ADMP-tablebody">        <!--  Corpo da Tabela -->
                <?php foreach($publicacoes as $publicacao): ?>
                <tr class="ADMP-row">
                    <td class="ADMP-cell"><?=$publicacao-> id?></td>
                    <td class="ADMP-cell"><?=$publicacao-> titulo?></td>
                    <td class="ADMP-cell"><?=$publicacao-> usuarios_id?></td>
                    <td class="ADMP-cell"><?=$publicacao-> data?></td>


                    <td class="ADMP-cell">    <!-- Icones da Tabela -->
                        <button class="ADMP-btnIcons" onclick="InteracaoModal('containermodalview')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ADMP-icons" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                            </svg>
                        </button>
                        <button class="ADMP-btnIcons" onclick="InteracaoModal('ModalExcluir')" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ADMP-icons" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                            </svg>
                        </button>
                        <button class="ADMP-btnIcons" onclick="InteracaoModal('containermodaledit')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ADMP-icons" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <tfoot class="ADMP-tablefooter">        <!-- rodape da tabela -->
             <div class="ADMP-auxtablefooter"></div>
        </tfoot>
        <div class="ADMP-pag">
            <button class="ADMP-btnpag"><</button>
            <button class="ADMP-btnpag">1</button>
            <button class="ADMP-btnpag">2</button>
            <button class="ADMP-btnpag">3</button>
            <button class="ADMP-btnpag">></button>
        </div>
    </div>
    
</body>
<div class="ADMP-filter" id="auxposts"></div>
    <script type="text/javascript" src="../../../public/js/ADM-publicacoes.js"></script>
</html>