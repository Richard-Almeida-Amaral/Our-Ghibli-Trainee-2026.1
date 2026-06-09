<!DOCTYPE html>
<html lang="pt-br" class="ADMPME-html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/edit.css">
    <title>Modal Editar</title>
</head>
<body class="ADMPME-body">
    
    <div class="ADMPME-container" id="admpmecontainer" class="modoverlay">
        
        <div class="ADMPME-header" id="ModalEditUsu">
            <h1>Editar Usuário</h1>
        </div> 
        <div class="ADMPME-mid">
            <div class="ADMPME-fields">
                <label for="">Nome</label>
                <input type="text" name="" id="" value= "<?=$usuario->nome?>" placeholder="Digite o seu nome" class="ADMPME-input">
            </div>
            <div class="ADMPME-fields">
                <label for="" >Email</label>
                <input type="email" name="" id="" value= "<?=$usuario->email?>" placeholder="Digite o seu email" class="ADMPME-input">
            </div>
            <div class="ADMPME-fields">
                <label for="">Senha</label>
                <input type="password" name="" id="" value= "<?=$usuario->senha?>" placeholder="Digite a sua senha" class="ADMPME-input">
            </div>
        </div>

        <div class="ADMPME-end">
            <button class="ADMPME-btncancel" onclick="fecharModalVisualizar('admpmecontainer')">Cancelar</button>
            <button class="ADMPME-btnapply">Salvar</button>
        </div>
    </div>
    <script src="../../../public/js/ModalVisualizarUsuario.js"></script>
</body>
</html>