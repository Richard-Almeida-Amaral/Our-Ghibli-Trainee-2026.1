<head>
<!-- Bibblioteca que armazena os olhos fechados-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>


<!-- Modal Visualizar -->
<section class="UsuModalCont modoverlay" id="usuarioVisualizar<?=$usuario->id ?>">
  <div id="Usumodalc">
        
        <div class="modcont" id="modbody<?=$usuario-> id?>">
          
          <div class="modtit">
            <h1>Visualização do Usuário</h1>
            
            <button type="button" id="fechamod" class="fechax" onclick="fecharModal('usuarioVisualizar<?=$usuario->id ?>')">&times</button>
          
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

              </div>

            </div>

          </div>

        </div>

      </div>
    
</section>