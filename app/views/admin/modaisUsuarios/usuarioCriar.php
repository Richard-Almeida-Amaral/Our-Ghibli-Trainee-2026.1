<section class="UsuModalCont ADMPMA-container modoverlay" id="usuarioCriar">
    <div id="Usumodalc">
        <form method="POST" action="/admin/usuarios/criar" class="FormCriarUsuario" id="usuarioCriar">
            <div class="ADMPMA-header">
                <h1>Criar Usuário</h1>
            </div>

            <div class="ADMPMA-mid">
                <div class="ADMPMA-fields">
                    <label for="">Nome</label>
                    <input type="text" name="nome" id="" placeholder="Digite o seu nome" class="ADMPMA-input">
                </div>
                <div class="ADMPMA-fields">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" placeholder="Digite o seu email" class="ADMPMA-input">
                </div>
                <div class="ADMPMA-fields">
                    <label for="">Senha</label>
                    <input type="password" name="senha" id="" placeholder="Digite a sua senha" class="ADMPMA-input">
                </div>
            </div>

            <div class="ADMPMA-end">
                <button type="button" class="ADMPMA-btncancel" onclick="fecharModal()">Cancelar</button>
                <button class="ADMPMA-btnapply">Criar</button>
            </div>
        </form>
    </div>
</section>