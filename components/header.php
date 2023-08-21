<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Agroagua</title>
</head>

<body>
    <!-- Desktop header -->
    <header class='desktop-header'>
        <div class='container border-bottom'>
            <nav class='navigation'>
                <a href='/agroagua-web-php/index.php' class='brand-name'>
                    <img src='./assets/logo.png' alt='Agro agua' />
                </a>
                <div class='navigation-menu'>
                    <ul>
                        <li><a href='/agroagua-web-php/index.php'>Inicio</a></li>
                        <li><a href="/agroagua-web-php/servicios.php">Servicios</a></li>
                        <li><a href="/agroagua-web-php/trabajos.php">Trabajos</a></li>
                        <li><a href="/agroagua-web-php/contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Mobile header -->
    <header class="mobile-header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a href='/agroagua-web-php/index.php' class='brand-name d-flex'>
                    <img src='./assets/logo.png' alt='Agro agua' />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/agroagua-web-php/index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/agroagua-web-php/servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/agroagua-web-php/trabajos.php">Trabajos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/agroagua-web-php/contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="contents">