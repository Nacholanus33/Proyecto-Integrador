<?php
require "helpers.php";
$email = "";
$contrasea = "";
$repContrasea="";
if ($_POST){
  $json = file_get_contents("users.json");
  $users = json_decode($json, true);
  $email = $_POST["email"];
  $contrasea = $_POST["password"];
  $repContrasea = $_POST["password_confirmation"];
    if($_POST["password"] != $_POST["password_confirmation"] && strlen($_POST["password"]) != 0){
        $errors["password"] = "Las contraseñas no coinciden";

    }
    if (strlen($_POST["password"]) < 8) {
      $errors["largopassword"] = "La contraseña debe tener un mínimo de 8 caracteres";
    }
    if (strlen($_POST["email"]) == 0 || filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
      $errors["nohayemail"] = "Debe ingresar un email válido";
        }
        foreach ($users as $user) {
          if ($user["email"] == $_POST["email"]) {
           $errors["mail"] = "El mail ya esta registrado";
          }
         }
    if (empty($errors)){




          $users[] =[
              "email"=> $_POST["email"],
              "password"=> password_hash( $_POST["password"], PASSWORD_DEFAULT),
              "avatar" => upload("avatar"),
          ];
          $json = json_encode($users, JSON_PRETTY_PRINT);
          file_put_contents("users.json",$json);
          header("location: perfil-usuario.php");
         }




    }



?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!-- <link rel="stylesheet" href="css/registrocss.css"> -->
    <?php include("head.php") ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
          <?php
      require("header.php");
       ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="col"><h1>Unite a nuestra comunidad</h1></div>
        </div>

        <div class="row" id="subtitulo">
        <div id="title" class="col">
            <h2>Rellená con tus datos</h2>
            <!-- Rellenar href con hipervínculo al login!!! -->
            <p>¿Ya estás inscripto? Logueate <a href="login.php">aca</a>.</p>
        </div>
        </div>


        <div class="body-login">
        <div class="modal-dialog text-center">
            <div class="col sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="img/avatar1.png" alt="Avatar-user">
                    </div>
                    <form  class="col-12" action="?action=register" method="post" enctype="multipart/form-data">

                        <div class="form-group user-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="<?=$email?>">
                            <p><strong> <?php if (isset($errors["mail"])): ?>
                              <?php echo $errors["mail"]?>


                            <?php endif; ?>
                          </strong>  </p>
                          <p><strong> <?php if (isset($errors["nohayemail"])): ?>
                            <?php echo $errors["nohayemail"]?>


                          <?php endif; ?>
                        </strong>  </p>
                        </div>
                        <div class="form-group pss-group ">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" value="<?=$contrasea?>">
                                <p><strong> <?php if (isset($errors["largopassword"])): ?>
                                  <?php echo $errors["largopassword"]?>


                                <?php endif; ?>
                              </strong>  </p>
                            </div>
                            <div class="form-group pss-group ">
                                <input type="password" class="form-control" placeholder="Confirma tu contraseña" name="password_confirmation" value="<?=$repContrasea?>">
                                <p><strong> <?php if (isset($errors["password"])): ?>
                                  <?php echo $errors["password"]?>


                                <?php endif; ?>
                              </strong>  </p>
                            </div>
                            <div class="form-group pss-group ">
                              <label id="imagenusuario" for="">Imagen de Usuario</label>
                                <input type="file" id="exampleFormControlFile1" name="avatar">
                              </div>
                            <button type="submit" class= "btn btn-primary">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
</div>

    <footer>
     <?php require ("footer.php") ?>
    </footer>
     <?php include ("scripts.php") ?>
    </body>
</html>
