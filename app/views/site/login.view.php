
<!DOCTYPE html>
<html lang="pt-br" id="heitor">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>
    <link rel="stylesheet" href="../../../public/css/site/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body class="alllogin" id="login-random">
    <div class="extralogin">
        <div class="login-tittle-area">
            <div class="uplogin"></div>
            <h1 id="tittlelogin">Our Ghibli</h1>
        </div>
        <div class="downlogin">
            <form action="" method="POST" class="modal-login">

                <div class="modal-uplogin">
                    <a href="/ ">
                        <img src="../../../public/assets/LogoLogin.png" alt="" id="logologin">
                    </a>
                </div>

                <div class="modal-midlogin">
                    <div class="login-fill">
                        <div class="boxlogin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16" id="maillogin">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                            </svg>
                            <input type="email" name="email" id="" placeholder="Digite seu e-mail..." class="input-login">
                        </div>
                    </div>
                    <div class="login-fill">
                        <div class="boxlogin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16" id="locklogin">
                            <path fill-rule="evenodd" d="M8 0a4 4 0 0 1 4 4v2.05a2.5 2.5 0 0 1 2 2.45v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 4 0 0 1 4-4m0 1a3 3 0 0 0-3 3v2h6V4a3 3 0 0 0-3-3"/>
                            </svg>

                            <input type="password" name="senha" id="login-password" placeholder="Digite sua senha" class="input-login">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="login-eye-open" viewBox="0 0 16 16" id="eye-open">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="login-eye-closed" viewBox="0 0 16 16" id="eye-closed">
                            <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z"/>
                            <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/>
                            </svg>
                        </div>
                    </div>

                </div>

                <div class="modal-downlogin">
                    <div id="bottom">	
                        <button type="submit"id="botaologin">Login</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script type="text/javascript" src="../../../public/js/login.js"></script>
</body>