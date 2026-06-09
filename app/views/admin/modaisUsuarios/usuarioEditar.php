<!DOCTYPE html>
<html lang="pt-br" class="ADMPME-html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../public/css/admin/modaisUsuarios/usuarioEditar.css" />
    <title>Modal Editar</title>
</head>

<body class="ADMPME-body">
    <form method="POST" action="" class="ADMPME-container" id="admpmecontainer">

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
            <button class="ADMPME-btncancel" onclick="fecharModalVisualizar('admpmecontainer')">Cancelar</button>
            <button class="ADMPME-btnapply">Salvar</button>
        </div>
    </form>
    <script src="../../../public/js/Modais.js"></script>
</body>

</html>