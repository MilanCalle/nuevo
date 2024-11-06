<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/BIENES RAICES/build/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<header class="header <?php echo $inicio ? 'inicio' : ''  ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/BIENES RAICES/index.php">
                    <img src="/BIENES RAICES/build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="/BIENES RAICES/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/BIENES RAICES/build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="/BIENES RAICES/nosotros.php">Nosotros</a>
                        <a href="/BIENES RAICES/anuncios.php">Anuncios</a>
                        <a href="/BIENES RAICES/blog.php">Blog</a>
                        <a href="/BIENES RAICES/contacto.php">Contacto</a>
                        <a href="/BIENES RAICES/login.php">Iniciar Secion </a>
                    </nav>
                </div>
   
                
           
            </div>
<?php if ($inicio) { ?>
                <h1>Venta de Casas y Departamentos exclusivos de Lujo</h1>
            <?php } ?>
            </div>
    </header>

