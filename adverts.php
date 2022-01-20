<?php 
    require 'includes/functions.php';
    includeTemplate('header'); 
?>
    <main class="container section">
        <h2>Casas y Depas en Venta</h2>

        <?php
            $limit = 10;
            include 'includes/templates/adverts.php';
        ?>

    </main>

<?php 
    includeTemplate('footer'); 
?>