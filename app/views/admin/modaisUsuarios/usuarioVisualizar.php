

<!-- Modal Visualizar -->
<section class="UsuModalCont modoverlay" id="usuarioVisualizar<?=$usuario->id ?>">
  <div id="Usumodalc">

    <form class="modcont" >

      <div class="modtit">
        <h2>Visualização do Usuário</h2>

        <button type="button" id="fechamod" class="fechax" onclick="fecharModal('usuarioVisualizar<?=$usuario->id ?>')">&times</button>
      </div>

      <div class="modbody">

        <div class="inputcont">
          <label for="userId">ID</label>

          <div class="input-wrapper no-icon">
            <input type="text" id="userId" disabled>
          </div>
        </div>

        <div class="inputcont">
          <label for="userName">Nome</label>

          <div class="input-wrapper no-icon">
            <input type="text" id="userName" disabled>
          </div>
        </div>

        <div class="inputcont">
          <label for="userEmail">Email</label>

          <div class="input-wrapper">
            <i class="fa-regular fa-envelope input-icon"></i>

            <input type="text" id="userEmail" disabled>
          </div>
        </div>

        <div class="inputcont">
          <label for="userSenha">Senha</label>

          <div class="input-wrapper">
            <i class="fa-solid fa-lock input-icon"></i>

            <input type="password" id="userSenha" disabled>

            <i class="fa-regular fa-eye-slash toggle-password" id="togglePassword"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>