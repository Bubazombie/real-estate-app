<?php
    //Import DB
    require __DIR__ . '/../config/database.php';
    $db = connectDB();

    //Query
    $query = "SELECT * FROM estates LIMIT ${limit}";

    //Result
    $result = mysqli_query($db, $query);
?>

<div class="container-adverts">
    <?php while ($estate = mysqli_fetch_assoc($result)): ?>
    <div class="advert">
        <img loading="lazy" src="/images/<?php echo $estate['image']; ?>" alt="advert">
        <div class="content-advert">
            <h3><?php echo $estate['title']; ?></h3>
            <p><?php echo $estate['description']; ?></p>
            <p class="precio">$<?php echo $estate['price']; ?></p>

            <ul class="icons-caracteristicas">
                <li>
                    <img class="icon" loading="lazy" src="build/img/icon_wc.svg" alt="icon wc">
                    <p><?php echo $estate['wc']; ?></p>
                </li>
                <li>
                    <img class="icon" loading="lazy" src="build/img/icon_estacionamiento.svg" alt="icon estacionamiento">
                    <p><?php echo $estate['parking']; ?></p>
                </li>
                <li>
                    <img class="icon" loading="lazy" src="build/img/icon_dormitorio.svg" alt="icon dormitorio">
                    <p><?php echo $estate['bedrooms']; ?></p>
                </li>
            </ul>
            <a href="advert.php?id=<?php echo $estate['id']; ?>" class="button button-yellow-block">
                Ver Propiedad
            </a>
        </div>
    </div>
    <?php endwhile; ?>
</div>

<?php
    //End connection
        mysqli_close($db);
?>