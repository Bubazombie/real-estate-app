<?php
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('Location: /');
    }
    //Import DB
    require 'includes/config/database.php';
    $db = connectDB();

    //Query
    $query = "SELECT * FROM estates WHERE id = ${id}";

    //Result
    $result = mysqli_query($db, $query);

    if ($result->num_rows === 0) {
        header('Location: /');
    }

    $estate = mysqli_fetch_assoc($result);

    require 'includes/functions.php';
    includeTemplate('header');
?>

<main class="container section text-centered">
    <h1><?php echo $estate['title']; ?></h1>
    <img src="/images/<?php echo $estate['image']; ?>" alt="image de la propiedad" loading="lazy">
    <div class="resumen-propiedad">
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
        <p><?php echo $estate['description']; ?></p>
    </div>
</main>

<?php
    mysqli_close($db); 
    includeTemplate('footer');
?>