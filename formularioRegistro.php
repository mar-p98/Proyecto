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
  <body>

    <header>
      <?php require("encabezado.php"); ?>
    </header>


    <div class="container">
      <div class="row contenedor">
        <div class="col-lg-3">

        </div>
        <div class="col-12 col-lg-6">
          <form id="formulario">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" value="">
            </div>
            <div class= form-group>
              <label for="email">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
              <label for="tel">Telefono</label>
              <input type="tel" class="form-control" name="telefono" value="">
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label for="password">Confirmar contraseña</label>   <!-- revisar que sea la misma, videos DH -->
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="boton">
              <button type="submit" class="btn btn_login" >Registrarse</button>
            </div>
          </form>
        </div>

        <div class="col-lg-3">

        </div>


      </div>
    </div>


    <div class="contenedor">

    </div>

  <!-- nombre (y apellido), email, confirmar email, contraseña, fecha de nacimiento?,
   ... boton resgitrarse y pregunta: ¿ya tienes cuenta? inciar sesion -->



   <footer>
     <?php require("pieDePagina.php"); ?>
   </footer>






   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
   crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
   integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
   integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
