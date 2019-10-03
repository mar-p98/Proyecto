<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Livvic|Nunito|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Livvic|Nunito|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Login_Registrarse.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Pastelería · Recuperar contraseña</title>
  </head>

<body>

<header>
      <?php require("encabezado.php"); ?>
</header>

<main>
    <?php
    session_start();
    $sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
    if(!empty($sessData['status']['msg'])){
        $statusMsg = $sessData['status']['msg'];
        $statusMsgType = $sessData['status']['type'];
        unset($_SESSION['sessData']['status']);
    }
    ?>
    <div class="container">
      <div class="row contenedor">
        <div class="col-12 col-lg-6">

          <div class="tituloPrincipal">
            <h1>Recupera tu contraseña</h1>
          </div>

          <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>


              <form id=formulario action='cambiarContrasena.php' method="post">
                  <p id="titulo-form"><b>Ingresa tu correo-e</b></p>
                    <div class= "user_info">
                        <div class="form-group">
                            <input type="email" class="form-control" name="Correo-e" placeholder="Ingresa tu correo-e" required="">
                              <div class="boton">
                                  <input type="submit" class="btn btn_login" name="forgotSubmit" value="Restaurar">
                              </div>
                        </div>
                    </div>
              </form>

        </div>
      </div>
    </div>
</main>

<footer>
    <?php require("pieDePagina.php"); ?>
</footer>

</body>
</html>
