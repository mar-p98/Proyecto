<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

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

  <?php require("encabezado.php"); ?>

  <main>

    <div class="container">
      <div class="row contenedor">
        <div class="col-12 col-lg-6">

          <div class="tituloPrincipal">
            <h1>Nueva contraseña</h1>
          </div>

          <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>


              <form id=formulario action='cambiarContrasena.php' method="post">
                  <p id="titulo-form"><b>Ingresa tu nueva contraseña</b></p>
                    <div class= "user_info">
                        <div class="form-group">
                            <input type="password" class="form-control" name="Contraseña" placeholder="Ingresa tu nueva contraseña" required="">
                            <input type="password" class="form-control" name="Contraseña" placeholder="Reingresa tu nueva contraseña" required="">
                              <div class="boton">
                                  <input type="submit" class="btn btn_login" name="forgotSubmit" value="Confirmar">
                              </div>
                        </div>
                    </div>
              </form>

        </div>
      </div>
    </div>
  </main>


  <?php require("pieDePagina.php"); ?>


</body>
</html>
