<?php
    $pg = "proyectos"
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">

        <div class="row">
            <div class="col-12 py-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="proyecto row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="images/abmclientes.png" class="img-fluid" alt="ABM CLIENTES">
                    <h5>ABM CLIENTES</h5>
                    <div class="card-body">
                        <p class="card-text">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                    </div>
                    <div class="row px-4 py-3">
                        <div class="col-6 ">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6">
                            <a href="" class="link-rojo">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/abmventas.png" class="img-fluid" alt="SISTEMA DE GESTIÓN DE VENTAS">
                    <h5>SISTEMA DE GESTIÓN DE VENTAS</h5>
                    <div class="card-body">
                        <p class="card-text">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y
                            MySQL de base de datos.</p>
                    </div>
                    <div class="row px-4 py-3">
                        <div class="col-6">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6">
                            <a href="" class="link-rojo">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/proyecto-integrador.png" class="img-fluid" alt="PROYECTO INTEGRADOR">
                    <h5>PROYECTO INTEGRADOR</h5>
                    <div class="card-body">
                        <p class="card-text">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel
                            administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    </div>
                    <div class="row px-4 py-3">
                        <div class="col-6">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6">
                            <a href="" class="link-rojo">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="footerBlanco container mt-auto pb-4 py-4">
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