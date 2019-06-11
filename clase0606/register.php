<?php

    function longitudMinima($field, $min){
      return strlen($field) >= $min;
        }
    function esMailValido($email){
      return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

$errors=[];

    $name = isset($_POST['name']) ? ($_POST['name']) : '';
    $email = isset($_POST['email']) ? ($_POST['email']) : '';
    $user = isset($_POST['user']) ? ($_POST['user']) : '';
    $pass = isset($_POST['pass']) ? ($_POST['pass']) : '';
    $repass = isset($_POST['repass']) ? ($_POST['repass']) : '';

    if ($_POST) {
      if (!longitudMinima($name, 3)) {
        $errors['name'] = "El nombre debe tener al menos 3 caracteres";
      }
      if (!longitudMinima($email, 10)) {
        $errors['email'] = "El email debe tener al menos 10 caracteres";
      }
      if (!$email) {
        $errors['email'] = "Debes ingresar un email.";
      } elseif (!esMailValido($email)) {
        $errors['email'] = "El email deber tener un formato válido.";
      }

      if (!longitudMinima($user, 5)) {
        $errors['user'] = "El usuario debe tener al menos 5 caracteres";
      }
      if (!longitudMinima($pass, 8)) {
        $errors['pass'] = "La Clave debe tener al menos (3) caracteres";
      }
      if ($pass != $repass) {
        $errors['repass'] = "La Clave debe coincidir";
      }
    }


    if (!$errors) {
      $pass = password_hash($pass, PASSWORD_DEFAULT);

      $NewUser[] = [
        'name' => $name,
        'email' => $email,
        'user' => $user,
        'pass' => $pass,
      ];

    }

    $allUsers = file_get_contents('user.json');
    $allUsers = json_decode($allUsers, true);
    $allUsers[] = $NewUser;
    file_put_contents('user.json', json_encode($allUsers));

 ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Formulario de Registro | Verdulería Online</title>
  </head>
  <body>
    <header>
      <h1>Formulario de Registro | Verdulería Online</h1>
    </header>
    <div class="container">
      <main>

        <div class="register-form">
          <?php if ($errors) : ?>
            <div class="errors">
              <?php foreach ($errors as $error) : ?>
              <p><?php echo $error ?></p>
            </div>
             <?php endforeach ?>
           <?php endif ?>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
              <label> Nombre
                <input type="text" name="name" value="<?php echo $name ?>">
              </label>

            </div>
            <div class="row">
              <label> Imagen
                <input type="file" name="image">
              </label>
            </div>
            <div class="row">
              <label> Email
                <input type="text" name="email" value="<?php echo $email ?>">
              </label>

            </div>
            <div class="row">
              <label> Usuario
                <input type="text" name="user" value="<?php echo $user ?>">
              </label>

            </div>
            <div class="row">
              <label> Password
                <input type="password" name="pass" value="">
              </label>

            </div>
            <div class="row">
              <label> Repetir Password
                <input type="password" name="repass" value="">
              </label>

            </div>
            <div class="row">
              <button type="submit">Enviar</button>
            </div>
          </form>
        </div>
      </main>
    </div>
    <footer>
      <h2>Formulario de Registro | Verdulería Online</h2>
    </footer>
  </body>
</html>
