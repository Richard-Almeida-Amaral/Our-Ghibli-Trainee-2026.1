
<div class="cadastrofiltro" id="idcadastrofiltro"></div>
<form method="POST" action="/admin/usuarios/cadastro" class="cadastroContainer" id="ModalCadastro">
    <div class="cadastroHeader">
        <h1>Cadastro de Usuário</h1>
    </div>

    <div class="cadastroBody">
        <div class="cadastroFields">
            <label for="" class="cadastroLabel">Nome</label>
            <input type="text" name="nome" id="" placeholder="Digite o seu nome" class="cadastroInput">
        </div>

        <div class="cadastroFields">
            <label for="" class="cadastroLabel">Email</label>
            <input type="email" name="email" id="" placeholder="Digite o seu email" class="cadastroInput">
        </div>

        <div class="cadastroFields">
            <label for="" class="cadastroLabel">Senha</label>
            <input type="password" name="senha" id="" placeholder="Digite a sua senha" class="cadastroInput">
        </div>
    </div>

    <div class="cadastroBtn">
        <button type="button" class="cadastroCancelar" onclick="fecharModal('ModalCadastro','idcadastrofiltro')">Cancelar</button>
        <button class="cadastroCriar">Criar</button>
    </div>
</form>