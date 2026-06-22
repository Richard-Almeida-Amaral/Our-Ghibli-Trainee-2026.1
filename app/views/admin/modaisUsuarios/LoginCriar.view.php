
<div class="cadastrofiltro" id="idcadastrofiltro"></div>
<form method="POST" action="/admin/usuarios/cadastro" class="cadastroContainer" id="ModalCadastro">
    <div class="cadastroHeader">
        <h1>Cadastro de Usuário</h1>
    </div>

    <div class="cadastroBody">
        <div class="cadastroFields">
            <label for="nome" class="cadastroLabel">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o seu nome" class="cadastroInput" required>
        </div>

        <div class="cadastroFields">
            <label for="email" class="cadastroLabel">Email</label>
            <input type="email" name="email" id="email" placeholder="Digite o seu email" class="cadastroInput" required>
        </div>

        <div class="cadastroFields">
            <label for="senha" class="cadastroLabel">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite a sua senha" class="cadastroInput" required>
        </div>
    </div>

    <div class="cadastroBtn">
        <button type="button" class="cadastroCancelar" onclick="fecharModal('ModalCadastro','idcadastrofiltro')">Cancelar</button>
        <button class="cadastroCriar">Criar</button>
    </div>
</form>