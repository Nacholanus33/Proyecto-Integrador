<?php


if ($_POST) {
  $json = file_get_contents("datos.json");
  $usuarios = json_decode($json, true);
  foreach ($usuarios as $usuario) {
    if ($usuario["email"] === $_POST["email"] && password_verify($_POST["password"], $usuario ["password"]) ) {
      header("Location: bienvenido.php ");
      exit();
    }
    if ($usuario["email"] === $_POST["email"] && password_verify($_POST["password"], $usuario ["password"]) {
      // code...
    }

  }





}










 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php require "head.php"?>

    <title>Login</title>
</head>
<body>
    <?php require "header.php"?>

    <div class="body-login">
      <div class="modal-dialog text-center">
        <div class="col sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/avatar1.png" alt="Avatar-user">
                </div>
                <form  class="col-12">
                    <div class="form-group user-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group pss-group "><i class="fas fa-user"></i>
                            <input type="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <button type="submit" class= "btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contraseña</a>
                </div>
                <div class="col-12 forgot">
                        <a href="registro1.php">Registrarme</a>
                    </div>

            </div>
        </div>



        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>


    <?php require "footer.php"?>
     <?php include ("scripts.php") ?>
</body>
</html>
