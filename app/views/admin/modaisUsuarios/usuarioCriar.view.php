<!DOCTYPE html>
<html lang="pt-br" class="ADMPMA-html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../public/css/admin/modaisUsuarios/postCriar.css"/>
    <title>Modal Adicionar</title>
</head>
<body class="ADMPMA-body">
    <div class="ADMPMA-container" id="admmacontainer">
        <div class="ADMPMA-header">
            <h1>Criar Usuário</h1>
        </div> 

        <div class="ADMPMA-mid">
            <div class="ADMPMA-fields">
                <label for="">Nome</label>
                <input type="text" name="" id="" placeholder="Digite o seu nome" class="ADMPMA-input">
            </div>
            <div class="ADMPMA-fields">
                <label for="" >Email</label>
                <input type="email" name="" id="" placeholder="Digite o seu email" class="ADMPMA-input">
            </div>
            <div class="ADMPMA-fields">
                <label for="">Senha</label>
                <input type="password" name="" id="" placeholder="Digite a sua senha" class="ADMPMA-input">
            </div>
        </div>

        <div class="ADMPMA-end">
            <button class="ADMPMA-btncancel" onclick="fecharModalVisualizar('admmacontainer')">Cancelar</button>
            <button class="ADMPMA-btnapply">Criar</button>
        </div>
    </div>

    <script src="../../../public/js/Modais.js"></script>
</body>
</html>