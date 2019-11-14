<?php
$noerrors["mail1"] = "";
$email = "";
$contrasea = "";
if ($_POST) {
  $noerrors["mail1"] = "Este Email no se encuentra registrado";
  $email = $_POST["email"];
  $contrasea = $_POST["password"];
  $json = file_get_contents("users.json");
  $usuarios = json_decode($json, true);
  foreach ($usuarios as $usuario) {
    if ($usuario["email"] === $_POST["email"] && password_verify($_POST["password"], $usuario ["password"]) == false) {
      $errors["password"] = "La contraseña es incorrecta";
    }
    if ($usuario["email"] === $_POST["email"]) {
      $noerrors["mail1"] = "hola";
    }
   }
   if (empty($errors) && $noerrors["mail1"] == "hola") {
     header("Location:perfil-usuario.php");
     exit();
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
                <form  class="col-12" action="?action=login" method="post">
                    <div class="form-group user-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?=$email?>">
                        <p><strong><?php if ($noerrors["mail1"] == "Este Email no se encuentra registrado"): ?>
                          <?php echo $noerrors["mail1"]?>


                        <?php endif;?> </strong></p>
                    </div>
                    <div class="form-group pss-group "><i class="fas fa-user"></i>
                            <input type="password" class="form-control" placeholder="Contraseña" name="password" value="<?=$contrasea?>">
                            <p><strong><?php if (isset($errors["password"])): ?>
                              <?php echo $errors["password"]?>


                            <?php endif; ?> </strong></p>

                            <div class="form-check">
                              <!-- <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                Recordar usuario
                              </label>
                            </div> -->
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


    
     <?php include ("scripts.php") ?>
</body>
</html>
