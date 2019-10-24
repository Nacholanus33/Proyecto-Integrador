<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/cart.css">
    <?php include("head.php") ?>
    <meta charset="utf-8">
  </head>
  <body>
    <header>
      <?php
      include("header.php");
       ?>
    </header>
    <h1>Tu carro de compra</h1>
    <div class="container">
      <h2>Confirme su compra y establezca modo de pago</h2>
      <section class="container">
        <article id="item" class="row">
          <img class="col-md-2 col-sm-3 col-6" src="imagenes/placeholder_img.png" alt="Foto del artículo a comprar">
          <p id="description_cart" class="col-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p id="precio_cart"class="col-2">$2300</p>
        </article>
        <article id="item" class="row">
          <img class="col-md-2 col-sm-3 col-6" src="imagenes/placeholder_img.png" alt="Foto del artículo a comprar">
          <p id="description_cart" class="col-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p id="precio_cart"class="col-2">$2300</p>
        </article>
        <article id="item" class="row">
          <img class="col-md-2 col-sm-3 col-6" src="imagenes/placeholder_img.png" alt="Foto del artículo a comprar">
          <p id="description_cart" class="col-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p id="precio_cart"class="col-2">$2300</p>
        </article>
        <article class="row">
          <b id="precio_total_cart">Total: $6900</b>
        </article>
      </section>
      <section id="aceptar_compra" class="container">
        <label class="col-2" for="modo_pago_cart">Método de pago</label>
        <select id="modo_pago_cart" class="col-10 col-sm-8 col-lg-6" name="modo_pago_cart">
          <option value="mastercard_cart">Mastercard</option>
          <option value="visa_cart">Visa</option>
          <option value="visa_debito_cart">Visa débito</option>
          <option value="rapipago_cart">Rapipago</option>
        </select>
        <article id="submit_cart" class="row">
          <button type="submit" name="submit_cart" class="btn btn-success">Comprar</button>
        </article>
      </section>
      <section id="agradecimiento">
        <p>¡Muchas gracias por su compra!</p>
      </section>
    </div>
    <footer>
     <?php include ("footer.php") ?>
    </footer>
  </body>
</html>
