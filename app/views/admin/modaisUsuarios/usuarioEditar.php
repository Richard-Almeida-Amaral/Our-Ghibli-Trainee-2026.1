<form method="POST" action="/admin/usuarios/edit" class="ADMPME-container" id="usuarioEditar<?= $usuario->id ?>">
    <div class="ADMPME-header" id="ModalEditUsu">
        <h1>Editar Usuário</h1>
    </div>
    <div class="ADMPME-mid">
        
        <div class="ADMPME-fields">
            <input type="hidden" name="id" id="IdEditarU<?=$usuario->id ?>" class="ADMPME-input" value="<?=$usuario->id?>">
        </div>
        <div class="ADMPME-fields">
            <label for="">Nome</label>  
            <input type="text" name="nome" id="NomeEditarU<?=$usuario->nome?>" placeholder="<?=$usuario->nome?>" class="ADMPME-input" value="<?=$usuario->nome?>">
        </div>
        <div class="ADMPME-fields">
            <label for="">Email</label>
            <input type="email" name="email" id="EmailEditarU<?=$usuario->email?>" placeholder="<?=$usuario->email?>" class="ADMPME-input" value="<?=$usuario->email?>">
        </div>
        <div class="ADMPME-fields">
            <label for="">Senha</label>
            <input type="password" name="senha" id="SenhaEditarU<?=$usuario->senha?>" placeholder="<?=$usuario->senha?>" class="ADMPME-input" value="<?=$usuario->senha?>">
        </div>
    </div>

    <div class="ADMPME-end">
        <button type="button" class="ADMPME-btncancel" onclick="fecharModal()">Cancelar</button>
        <button type="submit" class="ADMPME-btnapply">Salvar</button>
    </div>
</form>