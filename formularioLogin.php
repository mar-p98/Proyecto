<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/Login_Registrarse.css">
    <title></title>
  </head>
  <header>
    <?php include("encabezado.php"); ?>
  </header>
  <body>

    <div class="container">
      <div class="row contenedor">
        <div class="col-lg-3">

        </div>
        <div class="col-12 col-lg-6">
          <form id="formulario">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
              <small><a href="#" id="pass">¿Olvidaste tu contraseña?</a> </small>
            </div>
            <div class="boton">
              <button type="submit" class="btn btn_login" >Iniciar Sesión</button>
            </div>
            <div class="registrarse">
              <small id="pass">¿No tenés cuenta? <a href="formularioRegistro.php">Registrate</a> </small>
            </div>
          </form>
        </div>
        <div class="col-lg-3">

        </div>
      </div>


    </div>

    <footer>
      <?php include("pieDePagina.php"); ?>
    </footer>










    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
