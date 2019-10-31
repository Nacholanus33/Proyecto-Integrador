<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/nuevocss1.css">
    <link rel="stylesheet" href="css/form_contacto.css">
    <?php include("head.php") ?>
    <meta charset="utf-8">
  </head>
  <body>
  <header class="container.fluid d-flex">
 <?php
 include("header.php");
  ?>
  </header>
  <h1><b>Contactate con nosotros</b></h1>
  <div class="container">
  <form id="form_contacto" class="row" action="index.html" method="post">
    <label id="pais" class="col-1"  for="pais_contacto">País </label>
    <select id="pais_contacto" class="col-sm-9 col-md-7 col-lg-5" name="pais_contacto">
      <option value="arg_contacto">Argentina</option>
      <option value="bra_contacto">Brasil</option>
      <option value="chi_contacto">Chile</option>
      <option value="uru_contacto">Uruguay</option>
      <option value="par_contacto">Paraguay</option>
      <option value="bol_contacto">Bolivia</option>
      <option value="per_contacto">Perú</option>
      <option value="ecu_contacto">Ecuador</option>
      <option value="col_contacto">Colombia</option>
      <option value="ven_contacto">Venezuela</option>
    </select> <br>
    <label class="col-1" id="nombre_contacto" for="nombre">Nombre/s: </label>
    <input class="col-sm-9 col-md-7 col-lg-5" type="text" name="nombre" required /> <br>
    <label class="col-1" id="apellido_contacto"for="apellido">Apellido/s: </label>
    <input class="col-sm-9 col-md-7 col-lg-5" type="text" name="apellido" required > <br>
    <label class="col-1"id="mail_contacto"for="mail">E-mail:</label>
    <input class="col-sm-9 col-md-7 col-lg-5" type="email" name="mail" required /><br>
    <small id="emailHelp" class="form-text text-muted">Nunca compartiríamos tu mail con ningún tercero.</small>
    <label class="col-12" id="msj_contacto_cartel" for="msj">Mensaje:</label>
    <textarea class="col-12 col-sm-9 col-md-7 col-lg-5" id="msj_contacto" name="msj" placeholder="Escriba su mensaje aquí y responderemos a la brevedad: " required ></textarea><br>
    <button class="btn btn-primary col-sm-9 col-md-7 col-lg-5"type="submit">Enviar</button>
    <button class="btn btn-secondary col-sm-9 col-md-7 col-lg-5"type="reset">Borrar</button><br>
    <? Bienvenida()?>
  </form>
</div>
<footer>
 <?php include ("footer.php") ?>
</footer>
  </body>
</html>
