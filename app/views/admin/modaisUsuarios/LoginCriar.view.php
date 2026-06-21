<head>
    <link rel="stylesheet" href="../../../../public/css/admin/modaisUsuarios/loginCriar.css">
</head>

<form method="POST" action="/admin/usuarios/criar" class="cadastroContainer" id="">
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
        <button class="cadastroCriar">Criar</button>
        <button type="button" class="cadastroCancelar" onclick="fecharModal('usuarioCriar')">Cancelar</button>
    </div>
</form>