


    <form method="POST" action="" class="ADMPME-container" id="usuarioEditar<?= $usuario->id ?>">

        <div class="ADMPME-header" id="ModalEditUsu">
            <h1>Editar Usuário</h1>
        </div>

        <div class="ADMPME-mid">
            <div class="ADMPME-fields">
                <label for="">Nome</label>
                <input type="text" name="" id="" placeholder="Digite o seu nome" class="ADMPME-input">
            </div>
            <div class="ADMPME-fields">
                <label for="">Email</label>
                <input type="email" name="" id="" placeholder="Digite o seu email" class="ADMPME-input">
            </div>
            <div class="ADMPME-fields">
                <label for="">Senha</label>
                <input type="password" name="" id="" placeholder="Digite a sua senha" class="ADMPME-input">
            </div>
        </div>

        <div class="ADMPME-end">
            <button type="button" class="ADMPME-btncancel" onclick="fecharModal('usuarioEditar<?= $usuario->id ?>','filtromodalview')">Cancelar</button>
            <button type="submit" class="ADMPME-btnapply">Salvar</button>
        </div>
    </form>
