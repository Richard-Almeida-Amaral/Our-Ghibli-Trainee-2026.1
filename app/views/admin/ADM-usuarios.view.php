<!doctype html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Administração Usuários</title>
        <link rel="stylesheet" href="../../../public/css/ADM-usuarios.css" />

        <!-- Alice -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Alice&display=swap"
        rel="stylesheet"
        />

        <!-- Quicksand -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet"
        />

        <!-- Nunito -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet"
        />
        
    </head>
        <body class="ADMU-body">
            
            <div id="ModaisImportados">
                <?php require('add.view.php');?>
                
                        <?php require('edit.view.php');?>
                        <?php require('ModalVisualizarUsuario.view.php');?>
                    
            </div>

        <section class="Topo">
        <div class="Titulo">
            <p>Listas de Usuários</p>
        </div>

        <div class="acoestopo">
            <div class="pesqusuario">
            <input type="text" id="pesquisa" placeholder="Pesquisar" />
            </div>

            <div class="adcusuario">
            <button onclick="Uabrirmodal('admmacontainer')">+ Adicionar Usuário</button>
            </div>
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
                <?php foreach($usuarios as $usuario): ?>
                    <tr class="usuarioTr">
                        <td class="usuarioTd"><?=$usuario->id?></td>
                        <td class="usuarioTd"><?=$usuario->nome?></td>
                        <td class="usuarioTd"><?=$usuario->email?></td>
                        <td class="usuarioTdAc">
                            <button id="btnUsuModal" class="usubtnvisualizar" onclick="abrirModalVisualizar('Usumodalc')">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-eye-fill"
                                viewBox="0 0 16 16"
                                >
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"
                                />
                                </svg>
                            </button>

                            <button id="btnExcluirModal" class="usubtnvisualizar botaoexcluir" onclick="abrirModalVisualizar('Usumodalexcluir')">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-trash3-fill"
                                viewBox="0 0 16 16"
                                >
                                <path
                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"
                                />
                                </svg>
                            </button>
                            
                            <button id="btnUsuModal" class="usubtnvisualizar" onclick="Uabrirmodal('admpmecontainer')">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-pencil-square"
                                viewBox="0 0 16 16"
                                >
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                                />
                                <path
                                    fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"
                                />
                                </svg>
                            </button>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
            </table>

            <div class="downpart"></div>
        </div>
        </section>

        <section>
        <div class="ADMU-paginação">
            <button class="ADMU-bptão-paginação"><</button>
            <button class="ADMU-bptão-paginação">1</button>
            <button class="ADMU-bptão-paginação">2</button>
            <button class="ADMU-bptão-paginação">3</button>
            <button class="ADMU-bptão-paginação">></button>
        </div>
        </section>
    </body>
    <script src="../../../public/js/ADM-usuarios.js"></script>
    </html>
