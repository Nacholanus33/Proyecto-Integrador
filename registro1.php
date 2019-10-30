<?php  

if ($_POST){

    if($_POST['password'] != $_POST['password_confirmation']){
        $errors['password_confirmation'] = 'El password no coincide';

    }

    if (empty($errors)){
        $json = file_get_contents('users.json');

    $users = json_decode($json, true);

    $users[] =[
        'email'=> $_POST['email'],
        'password'=> password_hash( $_POST['password'], PASSWORD_DEFAULT),
    ];
    $json = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents('users.json',$json);
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
                    <form  class="col-12" action="?action=register" method="post">
                        <div class="form-group user-group">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group pss-group ">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password">
                            </div>
                            <div class="form-group pss-group ">
                                <input type="password" class="form-control" placeholder="Confirma tu contraseña" name="password_confirmation">
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
