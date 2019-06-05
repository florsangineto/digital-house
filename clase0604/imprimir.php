<?php

  $errors = [];

  $name = isset($_POST['name']) ? $_POST['name'] : "" ;
  $email = isset($_POST['email']) ? $_POST['email'] : "" ;
  $user = isset($_POST['user']) ? $_POST['user'] : "";
  $pass =isset($_POST['pass']) ? $_POST['pass'] : "";


    /* Validación */

    if ($_POST) {
      /* Nombre 3 o más caracteres */
      if (!$name) {
        $errors['name'] = "Debes ingresar un nombre.";
      } elseif (strlen($name) < 3) {
        $errors['name'] = "El nombre debe tener al menos 3 caracteres";
      }

      /* Email en formato válido */
      if (!$email) {
        $errors['email'] = "Debes ingresar un email.";
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "El email deber tener un formato válido.";
      }

      /* Usuario 5 o más caracteres */
      if (!$user) {
        $errors['user'] = "Debes ingresar un usuario.";
      } elseif (strlen($user) < 5) {
        $errors['user'] = "El usuario debe tener al menos 5 caracteres";
      }

      /* Nombre 3 o más caracteres */
      if (!$pass) {
        $errors['pass'] = "Debes ingresar una contraseña.";
      } elseif (strlen($pass) < 8) {
        $errors['pass'] = "La contraseña debe tener al menos 8 caracteres";
      }
    }


    
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Formulario Practica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="jumbotron">
        <h1 class="display-4">Registro Verdulería</h1>
    </div>
    </header>
    <main>
      <!--
      <div class="errors">
        <ul>
          <?php foreach ($errors as $field => $error) : ?>
            <li><?php echo $error ?></li>
          <?php endforeach ?>
        </ul>
      </div>
      -->

    <div class="container">
      <form method="post">
        <div class="form-group">
          <label >Nombre y Apellido</label>
          <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
          <?php if (isset($errors['name'])) : ?>
            <p class="errors"><?php echo $errors['name'] ?></p>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label >Email </label>
          <input type="text"  name="email" class="form-control"  value="<?php echo $email ?>">
          <?php if (isset($errors['email'])) : ?>
            <p class="errors"><?php echo $errors['email'] ?></p>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label >Usuario</label>
          <input type="text" name="user" class="form-control" value="<?php echo $user ?>">
          <?php if (isset($errors['user'])) : ?>
            <p class="errors"><?php echo $errors['user'] ?></p>
          <?php endif; ?>
        </div>

          <div class="form-group">
            <label >Password</label>
            <input type="password" name="pass" class="form-control" >
          </div>

          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>


    </div>
    </main>
    <footer>

    </footer>
  </body>
</html>
