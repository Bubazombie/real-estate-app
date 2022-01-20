<?php 
    //check if user is auth
    require '../includes/functions.php';
    $auth = isAuth();

    if (!$auth) {
        header('location: /');
    }

    //Import conection
    require '../includes/config/database.php';
    $db = connectDB();

    //Define query
    $query = "SELECT * FROM estates";

    //Consult DB
    $resultDb = mysqli_query($db, $query);

    //Shows conditional message
    $result = $_GET['result'] ?? null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id) {
            //Delete file
            $query = "SELECT image FROM estates WHERE id = ${id}";
            $result = mysqli_query($db, $query);
            $estate = mysqli_fetch_assoc($result);
            unlink('../images/' . $estate['image']);

            //Delete estate
            $query = "DELETE FROM estates WHERE id = ${id}";
            $result = mysqli_query($db, $query);

            if ($result) {
                header('location: /admin?result=3');
            }
        }
    }

    //Includes template
    includeTemplate('header'); 
?>
    <main class="container section">
        <h1>Administrador de Bienes Raices</h1>

        <?php if(intval($result) === 1) : ?>
            <p class="alert success">Anuncio creado correctamente</p>
        <?php elseif(intval($result) === 2) : ?>    
            <p class="alert success">Anuncio Actualizado Correctamente</p>
        <?php elseif(intval($result) === 3) : ?>    
            <p class="alert success">Anuncio Eliminado Correctamente</p>

        <?php endif ?>
            
        <a href="/admin/estates/create.php" class="button button-green">Nueva Propiedad</a>

        <table class="estates">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($estate = mysqli_fetch_assoc($resultDb)) : ?>
                <tr>
                    <td><?php echo $estate['id']; ?></td>
                    <td><?php echo $estate['title']; ?></td>
                    <td> <img src="/images/<?php echo $estate['image']; ?>" alt="" class="table-image"> </td>
                    <td>$<?php echo $estate['price']; ?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $estate['id']; ?>">
                            <input type="submit" class="button-red-block" value="Eliminar">
                        </form>
                        <a href="admin/estates/update.php?id=<?php echo $estate['id']; ?>" class="button-yellow-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php 
    //Close connection
    mysqli_close($db);

    includeTemplate('footer'); 
?>