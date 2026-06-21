<head>
    <link rel="stylesheet" href="../../../../public/css/admin/modaisUsuarios/loginCriar.css">
</head>

<form method="POST" action="/admin/usuarios/criar" class="cadastroContainer" id="">
    <div class="cadastroHeader">
        <h1>Cadastro de Usuário</h1>
    </div>

    <div class="cadastroBody">
        <div class="cadastroFields">
            <label for="">Nome</label>
            <input type="text" name="nome" id="" placeholder="Digite o seu nome" class="cadastroInput">
        </div>
        
        <div class="cadastroFields">
            <label for="">Email</label>
            <input type="email" name="email" id="" placeholder="Digite o seu email" class="cadastroInput">
        </div>
        
        <div class="cadastroFields">
            <label for="">Senha</label>
            <input type="password" name="senha" id="" placeholder="Digite a sua senha" class="cadastroInput">
        </div>
    </div>

    <div class="cadastroBtn">
        <button type="button" class="" onclick="fecharModal('usuarioCriar')">Cancelar</button>
        <button class="">Criar</button>
    </div>
</form>