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
                        <input type="text" class="form-control" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group pss-group "><i class="fas fa-user"></i>
                            <input type="password" class="form-control" placeholder="contraseña">
                        </div>
                        <button type="submit" class= "btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contraseña</a>
                </div>
                <div class="col-12 forgot">
                        <a href="#">Registro</a>
                    </div>

            </div>
        </div>



        </div>
    
    </div>



    <?php require "footer.php"?>
</body>
</html>