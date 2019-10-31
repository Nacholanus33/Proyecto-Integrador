<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "head.php" ?>

</head>
<body>
<?php require "header.php"?>

<div class="container" id="perfil">
      <div class="row" id="fila1-perfil">
        <div class="col-md-4" id="sociales-perfil">
          <img src="img/avatar1.png" alt="Foto Perfil">
          <h2>Primer Comprador</h2>
          <a class="btn btn-primary btn-xs" href="#">Facebook</a>
          <a class="btn btn-primary btn-xs" href="#">Twitter</a>
          <a class="btn btn-primary btn-xs" href="#">Instagram</a>

        </div>
        <div class="card text-center" id="compra-actual-perfil">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Tu compra Actual</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Seguir comprando</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Historial de compras</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h4 class="card-title">Gracias por elegir nuestros productos</h4>
              <p class="card-text">Nuestro compromiso es traerte siempre la mejor calidad a un precio justo</p>
              <a href="#" class="btn btn-primary">Seguí comprando</a>
            </div>
          </div>
      </div>
      <div class="row" id="prod-relacionados">
          <div class="card-group" id="grupo-rel">
              <div class="card">
                <img src="img/mochila3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Podes sumarle esta mochila a tu pedido</h4>
                  <p class="card-text">especial para el estudiante actual</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img src="img/mochila6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Esta otra mochila podria ser tuya también</h4>
                  <p class="card-text">No dejes pasar esta oportunidad</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img src="img/mochila7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">¿Que tal esta mochila para tu notebook?</h4>
                  <p class="card-text">Justo el tamaño y la protección necesaria</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>


        </div>
      </div>
</div>



</body>
</html>
