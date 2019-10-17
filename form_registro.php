<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/form_registro.css">
    <?php include("head.php") ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header class="container.fluid d-flex">
      <?php
      include("header.php");
       ?>
    </header>
    <h1>Unite a nuestra comunidad</h1>
    <div class="container">
      <div id="title" class="row-title">
        <h2>Rellená con tus datos</h2>
        <!-- Rellenar href con hipervínculo al login!!! -->
        <p>¿Ya estás inscripto? Logueate <a href="login.php">aca</a>.</p>
      </div> <br>
      <div class="container">
      <form id="form_registro" class="row" action="index.html" method="post">
        <label class="col-3 col-md-1" id="nombre_registro" for="nombre_registro">Nombre/s: </label>
        <input class="col-12  col-sm-8 col-md-6" type="text" name="nombre_registro" /> <br>
          <label class="col-3 col-md-1" id="apellido_registro"for="apellido_registro">Apellido/s: </label>
          <input class="col-12 col-sm-8 col-md-6" type="text" name="apellido_registro" > <br>
          <label class="col-3  col-md-1"  for="pais_registro">País </label>
          <select id="pais_registro" class="col-12 col-sm-8 col-md-6" name="pais_registro"><br>
            <option value="arg_registro">Argentina</option>
            <option value="bra_registro">Brasil</option>
            <option value="chi_registro">Chile</option>
            <option value="uru_registro">Uruguay</option>
            <option value="par_registro">Paraguay</option>
            <option value="bol_registro">Bolivia</option>
            <option value="per_registro">Perú</option>
            <option value="ecu_registro">Ecuador</option>
            <option value="col_registro">Colombia</option>
            <option value="ven_registro">Venezuela</option>
            </select> <br>
          <label id="pass_registro" class="col-3 col-md-1" for="pass_registro">Contraseña: </label>
          <input class="col-12 col-sm-8 col-md-6" type="password" name="pass_registro" required><br>
          <label id="pass_registro_conf" class="col-6 col-md-2" for="pass_registro_conf">Repita la contraseña: </label>
          <input class="col-12 col-sm-8 col-md-6" type="password" name="pass_registro_conf" required><br>
          <label class="col-3 col-md-1" id="mail_registro" for="mail_registro">E-mail:</label>
          <input class="col-12 col-sm-8 col-md-6" type="email" name="mail_registro" required/><br>
          <label class="col-6 col-md-2" id="mail_registro_conf" for="mail_registro_conf">Repita su E-mail:</label>
          <input class="col-12 col-sm-8 col-md-6" type="email" name="mail_registro_conf" required/><br>
          <button type="submit" name="submit_registro" class="btn btn-success">Creá tu cuenta</button>
          </div>
        </form>
    </div>
    <footer>
     <?php include ("footer.php") ?>
    </footer>
  </body>
</html>
