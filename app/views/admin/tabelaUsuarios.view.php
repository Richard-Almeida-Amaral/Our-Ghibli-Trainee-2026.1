<!doctype html>
<html lang="pt-br">
<div class="Usuariosidebar">
    <?php require('sidebar.view.php'); ?>
</div>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administração Usuários</title>
    <link rel="stylesheet" href="../../../public/css/admin/tabelaUsuarios.css" />

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Alice -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Alice&display=swap"
        rel="stylesheet" />

    <!-- Quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet" />

    <!-- Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../../../../public/css/admin/modaisUsuarios/usuarioCriar.css" />
    <link rel="stylesheet" href="../../../../public/css/admin/modaisUsuarios/usuarioExcluir.css" />
    <link rel="stylesheet" href="../../../../public/css/admin/modaisUsuarios/usuarioEditar.css" />
    <link rel="stylesheet" href="../../../public/css/admin/modaisUsuarios/usuarioVisualizar.css" />



</head>

<body class="ADMU-body">

    <?php require('./app/views/admin/modaisUsuarios/usuarioCriar.php') ?>

    <?php foreach ($usuarios as $usuario): ?>
        <?php require('./app/views/admin/modaisUsuarios/usuarioEditar.php') ?>
        <?php require('./app/views/admin/modaisUsuarios/usuarioVisualizar.php') ?>
        <?php require('./app/views/admin/modaisUsuarios/usuarioExcluir.php') ?>
    <?php endforeach; ?>


    <div id="filtromodalview"></div>

    <section class="Topo">
        <div class="Titulo">
            <h1>Listas de Usuários</h1>
        </div>

        <div class="acoestopo">
            <form action="/admin/usuarios" method="GET" class="pesqusuario">
                <input type="text" name="busca" id="pesquisa" placeholder="Pesquisar" value="<?= $textoBusca ?? '' ?>" />
                <button type="submit">Pesquisar</button>
            </form>



            
            <input type="button" value="+ Adicionar Usuário" class="adcusuario" onclick="abrirModal('usuarioCriar', 'filtromodalview')"> <!-- botao com onclick JS-->
            
        </div>
    </section>

    <section class="tabelacont">
        <div class="tabela">
            <table class="tablecont">
                <thead class="usuarioThead">
                    <tr class="usuarioTr">
                        <th id="codigo">ID</th>
                        <th id="nome">Nome</th>
                        <th id="email">Email</th>
                        <th id="acoes">Ações</th>
                    </tr>
                </thead>

                <tbody class="usuarioTbody">
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr class="usuarioTr">
                            <td class="usuarioTd"><?= $usuario->id ?></td>
                            <td class="usuarioTd"><?= $usuario->nome ?></td>
                            <td class="usuarioTd"><?= $usuario->email ?></td>
                            <td class="usuarioTdAc">

                                <!-- Abre Modal Visualizar -->
                                <button type="button" id="btnUsuModal" class="usubtnvisualizar" onclick="abrirModal('usuarioVisualizar<?= $usuario->id ?>','filtromodalview')">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-eye-fill"
                                        viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                    </svg>
                                </button>

                                <!-- Abre Modais Editar -->

                                <button type="button" id="btnUsuModal" class="usubtnvisualizar" onclick="abrirModal('usuarioEditar<?= $usuario->id ?>','filtromodalview')">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-pencil-square"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path
                                            fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg>
                                </button>

                                <!-- Abre Modal Excluir -->
                                <button type="button" id="btnExcluirModal<?php echo $usuario->id; ?>" class="usubtnvisualizar botaoexcluir" onclick="abrirModal('usuarioExcluir<?= $usuario->id ?>','filtromodalview')">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-trash3-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                    </svg>
                                </button>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="downpart"></div>
        </div>
    </section>
    
    <?php require(__DIR__ . '/../site/paginacao.php') ?>

    <!-- <section>
        <div class="ADMU-paginação">
            <button class="ADMU-bptão-paginação">
                <</button>
                    <button class="ADMU-bptão-paginação">1</button>
                    <button class="ADMU-bptão-paginação">2</button>
                    <button class="ADMU-bptão-paginação">3</button>
                    <button class="ADMU-bptão-paginação">></button>
        </div>
    </section> -->
</body>

<script src="../../../public/js/Modais.js"></script>

</html>