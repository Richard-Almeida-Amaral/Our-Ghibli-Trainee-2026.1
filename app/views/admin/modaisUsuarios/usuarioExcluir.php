<section class="UsuModalCont modoverlay" id="usuarioExcluir<?= $usuario->id ?>">
  <div id="Usumodalc">
    <form method="POST" action="/admin/usuarios/excluir">

    <!-- Guarda id usuario para enviar para o controller excluir o usuario correto -->
      <input type="hidden" name="id" value="<?= $usuario->id ?>">

      <div class="modcont">

        <div class="modtit titExcluir">
          <h1>Excluir o Usuário</h1>
        </div>

        <div class="modbody bodyExcluir">

          <img class="iconlix" src="../../../public/assets/disposicao.png" alt="">
          <p class="textoExcluir"> Deseja excluir este usuário</p>

          <div class="btsExcluir">
            <button type="button" class="btnAcoesUsu btnUsuCancelar" onclick="fecharModal('usuarioExcluir<?= $usuario->id ?>','filtromodalview')">Cancelar</button>
            <button type="submit" class="btnAcoesUsu btnUsuExcluir">Excluir</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
