<!doctype html>
<html lang="pt-BR">
  
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../public/css/ModalVisualizarUsuario.css" />
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
    <?php foreach($usuarios as $usuario): ?>
    <!-- Modal Visualizar -->
    <section class="UsuModalCont">      
      <div id="Usumodalc" class="modoverlay" >
        
        <div class="modcont" id="modbody<?=$usuario-> id?>">
          
          <div class="modtit">
            <h2>Visualização do Usuário</h2>
            
            <button id="fechamod" class="fechax" onclick="fecharModalVisualizar('Usumodalc')">&times</button>
          </div>

          <div class="modbody">
            
            <div class="inputcont">
              <label for="userId">ID</label>

              <div class="input-wrapper no-icon">
                <div class="InfoCont">
                  <span  class="Info"><?=$usuario->id?></span>
                </div>
              </div>

            </div>

            <div class="inputcont">
              <label for="userName">Nome</label>

              <div class="input-wrapper no-icon">
                <div class="InfoCont">
                  <span  class="Info"><?=$usuario->nome?> </span>
                </div>
              </div>
            </div>

            <div class="inputcont">
              <label for="userEmail">Email</label>

              <div class="input-wrapper">
                <i class="fa-regular fa-envelope input-icon"></i>
                
                <div class="InfoCont">
                  <span  class="InfoCI"><?=$usuario->email?> </span>
                </div>
              </div>
            </div>

            <div class="inputcont">
              <label for="userSenha">Senha</label>

              <div class="input-wrapper">
                <i class="fa-solid fa-lock input-icon"></i>
                
                <div class="InfoCont">
                  <span  class="InfoCI"><?=$usuario->senha?></span>
                </div>


                <!-- <i class="fa-regular fa-eye-slash toggle-password" id="togglePassword"></i> -->
              </div>

            </div>

          </div>

        </div>

      </div>
    <?php endforeach;?>

      
      <div id="Usumodalexcluir" class="modoverlay" >
        
        <div class="modcont">
          
          <div class="modtit titExcluir">
            <h2>Excluir o Usuário</h2>
          </div>

          <div class="modbody bodyExcluir">
            
            <img class="iconlix" src="../../../public/assets/disposicao.png" alt="">
            <p class="textoExcluir"> Deseja excluir este usuário</p>
            
            <div class="btsExcluir">
              <button class="btnAcoesUsu btnUsuCancelar" onclick="fecharModalVisualizar('Usumodalexcluir')">Cancelar</button>
              <button class="btnAcoesUsu btnUsuExcluir">Excluir</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="../../../public/js/ModalVisualizarUsuario.js"></script>
  </body>
</html>