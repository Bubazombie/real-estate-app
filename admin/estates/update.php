<?php
    //check if user is auth
    require '../../includes/functions.php';
    $auth = isAuth();

    if (!$auth) {
        header('location: /');
    }
    //Validate URL according to valid ID
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('Location: /admin');
    }

    //DB
    require '../../includes/config/database.php';
    $db = connectDB();

    //GET DATA FROM DB
    $query = "SELECT * FROM estates WHERE id = ${id}";
    $result = mysqli_query($db, $query);
    $estate = mysqli_fetch_assoc($result);

    //Consult DB for vendors
    $query = "SELECT * FROM vendors";
    $result = mysqli_query($db, $query);

    //Array with error messages 
    $errors = [];

    $title = $estate['title'];
    $price = $estate['price'];
    $description = $estate['description'];
    $bedrooms = $estate['bedrooms'];
    $wc = $estate['wc'];
    $parking = $estate['parking'];
    $vendorId = $estate['vendorId'];
    $created = date('Y/m/d');
    $estateImage = $estate['image'];

    //Execute code after user sends form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $title = mysqli_real_escape_string( $db, $_POST['title'] );
        $price = mysqli_real_escape_string( $db, $_POST['price'] );
        $description = mysqli_real_escape_string( $db, $_POST['description'] );
        $bedrooms = mysqli_real_escape_string( $db, $_POST['bedrooms'] );
        $wc = mysqli_real_escape_string( $db, $_POST['wc'] );
        $parking = mysqli_real_escape_string( $db, $_POST['parking'] );
        $vendorId = mysqli_real_escape_string( $db, $_POST['vendor'] );

        //assign files to a variable
        $image = $_FILES['image'];

        if (!$title) {
            $errors[] = 'El título es obligatorio';
        }
        if (!$price) {
            $errors[] = 'El precio es obligatorio';
        }
        if (strlen($description) < 50) {
            $errors[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
        }
        if (!$bedrooms) {
            $errors[] = 'La cantidad de habitaciones es obligatoria';
        }
        if (!$wc) {
            $errors[] = 'La cantidad de baños es obligatoria';
        }
        if (!$parking) {
            $errors[] = 'La cantidad de estacionamientos es obligatoria';
        }
        if (!$vendorId) {
            $errors[] = 'Elige un vendedor';
        }

        //Validate image size
        if ($image['size'] > 1000000) {
            $errors[] = 'La imagen es muy pesada';
        }

        //Check if $errors is empty
        if (empty($errors)) {
            //Create folder
            $imageFolder = '../../images/';

            if (!is_dir($imageFolder)) {
                mkdir($imageFolder);
            }
            
            $ImageName = '';

            //Upload files

            //Delete previous image if image updated
            if ($image['name']) {
                unlink($imageFolder . $estate['image']);

            //Generate unique name
            $imageName = md5(uniqid(rand(), true)) . ".jpg";

            //Upload Image
            move_uploaded_file($image['tmp_name'], $imageFolder . $imageName);
            
            } else {
                $imageName = $estate['image'];
            }

            //Insert into DB
            $query = " UPDATE estates SET title = '${title}', price = ${price}, image = '${imageName}', description = '${description}', bedrooms = ${bedrooms}, wc = ${wc}, parking = ${parking}, vendorId = ${vendorId} WHERE id = ${id} ";

            $result = mysqli_query($db, $query);

            //Redirect after inserting register to DB
            if ($result) {
                header('Location: /admin?result=2');
            }
        }
    }

    includeTemplate('header'); 
?>
    <main class="container section">
        <h1>Actualizar Propiedad</h1>

        <a href="/admin" class="button button-green">Volver</a>

        <?php foreach($errors as $error) { ?>
        <div class="alert error">
            <?php echo $error; ?>
        </div>

        <?php }; ?>

        <form class="form" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="title">Titulo:</label>
                <input name="title" type="text" id="title" placeholder="Titulo Propiedad" value="<?php echo $title; ?>">

                <label for="price">Precio:</label>
                <input type="number" name="price" id="price" placeholder="Precio Propiedad" value="<?php echo $price; ?>">

                <label for="image">Imagen:</label>
                <input type="file" id="image" accept="image/jpeg, image/png" name="image">

                <img src="/images/<?php echo $estateImage; ?>" alt="" class="image-small">

                <label for="description">Descripción:</label>
                <textarea id="description" name="description"><?php echo $description; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="bedrooms">Habitaciones:</label>
                <input type="number" id="bedrooms" name="bedrooms" placeholder="Ej.: 3" min="1" max="9" value="<?php echo $bedrooms; ?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej.: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="parking">Estacionamiento:</label>
                <input type="number" id="parking" name="parking" placeholder="Ej.: 3" min="1" max="9" value="<?php echo $parking; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendor">
                    <option value="" disabled selected>--Seleccione--</option>
                    <?php while($vendor = mysqli_fetch_assoc($result)) { ?>
                        <option <?php echo $vendorId === $vendor['id'] ? 'selected' : ''; ?> value="<?php echo $vendor['id']; ?>"><?php echo $vendor['name'] . " " . $vendor['surname']; ?></option>
                    <?php } ?>
                </select>
            </fieldset>

            <input type="submit" value="Actualizar Propiedad" class="button button-green">
        </form>

    </main>

<?php 
    includeTemplate('footer'); 
?>