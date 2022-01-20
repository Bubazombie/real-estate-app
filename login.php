<?php
    require 'includes/config/database.php';
    $db = connectDB();

    //User AUTHENTICATION
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $email = mysqli_real_escape_string($db,  filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
          $password = mysqli_real_escape_string($db, $_POST['password']); 

          if (!$email) {
            $errors[] = 'El email es obligatorio o no es válido';
          }
          if (!$password) {
            $errors[] = 'La contraseña es obligatoria';
          }
          if (empty($errors)) {
              //Check if user exists
              $query = "SELECT * FROM users WHERE email = '${email}'";
              $result = mysqli_query($db, $query);

              if ($result->num_rows) { //one way to check if a query throws results
                    //check password
                    $user = mysqli_fetch_assoc($result);

                    //password verify
                    $auth = password_verify($password, $user['password']);

                    if ($auth) {
                        session_start(); //to use the superglobal $_SESSION

                        //fill the SESSION array
                        $_SESSION['user'] = $user['email'];
                        $_SESSION['login'] = true;


                        header('location: /admin');
                    } else {
                        $errors[] = 'La contraseña es incorrecta';
                    }
              } else {
                    $errors[] = 'Este email no está registrado';
              }
          }
    }

    //Include header
    require 'includes/functions.php';
    includeTemplate('header');
?>
<main class="container section content-centered">
    <h1>Iniciar Sesión</h1>

    <?php foreach ($errors as $error): ?>
        <div class="alert error">
            <?php echo $error; ?>
        </div>
    <?php endforeach ?>

    <form method="POST" class="form">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input name="email" type="email" id="email" placeholder="Tu E-mail" required>

            <label for="password">Password</label>
            <input name="password" type="password" id="password" placeholder="Tu Contraseña" required>
        </fieldset>

        <input type="submit" value="Iniciar Sesión" class="button button-green">
    </form>
</main>

<?php
    includeTemplate('footer');
?>