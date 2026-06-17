<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../public/css/admin/sidebar.css" />

     <!-- Fontes -->

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
  </head>
  <?php
            //requisição da rota de maneira limpa para comparar
    $currentPath = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
            // variaveis para o active recebendo caminho/rota
    $activeDashboard = $currentPath === 'admin';
    $activePosts = $currentPath === 'admin/posts';
    $activeUsuarios = $currentPath === 'admin/usuarios';
  ?>
  <body>
    <!-- Corpo da Sidebar -->
    <aside class="sidebar" id="sidebar">
      <!-- div do topo da sidebar, onde tem o logo e o nome do usuário, e é clicável para fechar a sidebar -->
      <div class="top-sidebar">
        <div class="perfilSidebar">
          <img id= "fotoPerfil" class="imagemPerfil" src="../../../public/assets/LogoSemFundoApenasTotoro.png" alt="">
          <i class="iconeMenu">
            <img src="../../../public/assets/barra-de-menu.png" alt="">
          </i>
        </div>

        <!-- Navegação da Sidebar -->
        <nav class="navegacaoSidebar">
          <ul class="UlSidebar">
            <!-- Itens de navegação da sidebar -->
            <li class="itemSidebar <?= $activeDashboard ? 'active' : '' ?>" > <!-- Verificação active -->
              <a class="linksidebar" href="/admin" id="iconeDashboard">
                <i class="icone-sidebar" >
                  <img src="../../../public/assets/casa.png" alt="" srcset="" />
              </i>
                <span class="descricao">Dashboard</span>
              </a>
            </li>
            <!-- Itens de navegação da sidebar -->
            <li class="itemSidebar <?= $activePosts ? 'active' : '' ?>" id="iconePostagens"><!-- Verificação active -->
              <a href="/admin/posts">
                <i class="icone-sidebar">
                  <img
                    src="../../../public/assets/postagem-no-instagram.png" alt="" srcset=""/>
                  </i>
                <span class="descricao">Postagens</span>
              </a>
            </li>
            <!-- Itens de navegação da sidebar -->
            <li class="itemSidebar <?= $activeUsuarios ? 'active' : '' ?>" id="iconeUsuarios"><!-- Verificação active -->
              <a href="/admin/usuarios">
                <i class="icone-sidebar">
                  <img src="../../../public/assets/grupo-de-usuarios.png" alt="" srcset=""/></i>
                <i>
                  
                </i>
                <span class="descricao">Usuários</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>


      <!-- Parte do Logout da Sidebar -->
      <a href="/">
        <div class="logoutSidebar">
          <button type="button" id="buttonLogout">
            <i class="icone-sidebar">
              <img id="iconeLogout" src="../../../public/assets/seta.png" alt="" srcset="" />
            </i>
            <span class="itemDescricao">Sair</span>
          </button>
        </div>
      </a>
    </aside>
  </body>
  <script src="../../../public/js/sidebar.js"></script>
</html>
