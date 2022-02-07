<?php
    require_once ("globals.php");
    require_once ("db.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MovieStar</title>
    <link rel="shortcut icon" href="img/moviestar.ico" type="image/x-icon">
    <!--  Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.css" />
    <!--  Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!--  CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="#" class="navbar-brand">
                <img src="img/logo.svg" alt="MovieStar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collpse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
                <button type="submit" class="btn my-2 my-sm-0 ">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="colapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="auth.php" class="nav-link">Entrar / Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="main-container" class="container-fluid">
        <h1>Corpo do Site</h1>
    </div>

    <footer id="footer">
        <div id="social-container">
            <ul>
                <li>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
            </ul>
        </div>
        <div id="footer-link-container">
            <ul>
                <li><a href="#">Adicionar Filmes</a></li>
                <li><a href="#">Adcionar Critica</a></li>
                <li><a href="#">Entrar / Registra</a></li>
            </ul>
        </div>
        <p>&copy; 2021 mrpdesign.com.br</p>
    </footer>

    <!--  Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.js"></script>
</body>
</html>