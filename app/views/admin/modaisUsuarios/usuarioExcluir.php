<!doctype html>
<html lang="pt-BR">
  
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../../public/css/admin/modaisUsuarios/postVisualizar.css"/>
    <!-- Bibblioteca que armazena os olhos fechados-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

    <title>ModalVisualizarUsuario</title>
  
  </head>
  <body>
    <!-- Modal Visualizar -->
    <section class="UsuModalCont">      
      <div id="Usumodalc" class="modoverlay" >
        <form method="POST" action="" id="Usumodalexcluir" class="modoverlay" >
        
        <div class="modcont">
          
          <div class="modtit titExcluir">
            <h2>Excluir o Usuário</h2>
          </div>

          <div class="modbody bodyExcluir">
            
            <img class="iconlix" src="../../../public/assets/disposicao.png" alt="">
            <p class="textoExcluir"> Deseja excluir este usuário</p>
            
            <div class="btsExcluir">
              <button class="btnAcoesUsu btnUsuCancelar" onclick="ModalVisualizar('Usumodalexcluir')">Cancelar</button>
              <button class="btnAcoesUsu btnUsuExcluir">Excluir</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <script src="../../../public/js/Modais.js"></script>
  </body>
</html>