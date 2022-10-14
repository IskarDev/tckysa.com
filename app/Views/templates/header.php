<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCKY S.A.</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('public/assets/css/estilo.css')?>">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?=base_url()?>">TCKY S.A.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto">
                        <a href="https://wa.me/50763682506" target="_blank" class="text-decoration-none">
                            <img src="./public/assets/img/whatsapp.png" alt="whatsapp logo" width="30">
                            <span>+507 6368 2506</span>
                        </a>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url()?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('/about')?>">Quienes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:contacto@tckysa.com">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>