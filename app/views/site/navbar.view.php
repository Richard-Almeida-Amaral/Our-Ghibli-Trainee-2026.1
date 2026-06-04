<!DOCTYPE html>
<html lang="pt-br" id="navbar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../../../public/css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">

</head>
<body class="nav-all">
    <nav class="nav-container" id="NavClosed">
        <div class="nav-left">
            <img src="../../../public/assets/Logo-SemFundo.png" alt="" class="nav-logo">
        </div>

        <div class="nav-mid">
            <a href="/ ">
                <input type="button" value="HOME" class="nav-link">
            </a>
            <a href="/posts">
                <input type="button" value="PUBLICAÇÕES" class="nav-link">
            </a>
        </div>

        <div class="nav-right">
            <a href="/login">
                <input type="button" value="LOGIN" class="nav-login">
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="list" id="list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </div>
    </nav>




    <nav class="nav-container-open" id="NavOpen">
        <div class="nav-up-cell">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="X" id="X" viewBox="0 0 16 16" >
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
            </svg>
            <img src="../../../public/assets/Logo-SemFundo.png" alt="" class="nav-logo">
        </div>

        <div class="nav-mid-cell">
            <a href="/">
                <input type="button" value="HOME" class="nav-link-cell"> 
            </a>
            <a href="/posts">
                <input type="button" value="PUBLICAÇÕES" class="nav-link-cell">
            </a>
            <a href="/login">
                <input type="button" value="LOGIN" id="nav-login-cell" class="nav-link-cell">
            </a>
        </div>

        <div class="nav-down-cell">
            <img src="../../../public/assets/Linkedin.png" alt="">
            <a href="https://www.instagram.com/studioghibliofficiall/">
                <img src="../../../public/assets/Instagram.png" alt="">
            </a>
            <a href="https://www.facebook.com/WorldofGhibliUS">
                <img src="../../../public/assets/Facebook.png" alt="">
            </a>
        </div>
    </nav>
    
</body>
<script src="../../../public/js/navbar.js"></script>
</html>
