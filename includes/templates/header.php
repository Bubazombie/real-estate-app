<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $index ? 'index' : '' ?>">
        <div class="container content-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logo bienes raices">
                </a>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icon menu responsive">
                </div>

                <div class="right">
                    <img src="/build/img/dark-mode.svg" alt="dark mode" class="dark-mode-button">
                    <nav class="navigation">
                        <a href="aboutus.php">Nosotros</a>
                        <a href="adverts.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contact.php">Contacto</a>
                        <?php if ($auth):  ?>
                            <a href="signout.php">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
            <?php
                if($index) {
                    echo "<h1>Venta de Casas Y Departamentos Exclusivos De Lujo</h1>";
                }
            ?>
        </div>
    </header>