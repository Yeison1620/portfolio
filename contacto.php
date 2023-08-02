<?php
    $pg = "contacto"
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row ">
            <div class="col-12 pt-3 pb-5 ">
                <h1>Contacto</h1>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Te invito a que te contactes enviandome un mensaje o bien por WhatsApp.</p>
                </div>
                <div class="col-6">
                    <form action="" method="POST">
                        <div class="pb-3">
                            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                        </div>
                        <div class="pb-3">
                            <input type="email" name="txtEmail" id="txtEmail" placeholder="Correo" class="form-control">
                        </div>
                        <div class="pb-3">
                            <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/WhatsApp" class="form-control">
                        </div>
                        <div class="pb-3">
                            <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui tu mensaje" class="form-control"></textarea>
                        </div>
                        <div class="pb-3">
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                        </div>
                    </form>
                </div>
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