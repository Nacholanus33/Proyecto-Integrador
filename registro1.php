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
                    <form  class="col-12">
                        <div class="form-group user-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group pss-group "><i class="fas fa-user"></i>
                                <input type="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="form-group pss-group "><i class="fas fa-user"></i>
                                <input type="password" class="form-control" placeholder="Confirma tu contraseña">
                            </div>
                            <button type="submit" class= "btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
</div>

    <footer>
     <?php require ("footer.php") ?>
    </footer>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
