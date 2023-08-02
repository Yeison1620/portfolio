<?php
    $pg = "inicio"
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body  id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">

        <div class="row">
            <div class="col-12 cohete">
                <a href="proyectos.php">
                    <img src="images/cohete.svg" class="cohete" alt="Cohete">                        
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 saludo ">
                <p class="mx-auto"><span> Bienvenid@ a mi sitio web sobre desarrollo en sistemas.</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center py-3">
                <a href="proyectos.php">
                    <button class="btn-proyectos btn">Conoce mis proyectos</button>
                </a>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="row">
            <div class="col-3">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://depcsuite.com">DePC SUITE</a>
            </div>
            <div class="col-3">
                <a href="mailto:info@nelsontarche.com.ar">info@nelsontarche.com.ar</a>
            </div>
    
        </div>
    </footer>
</body>

</html>