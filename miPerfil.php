<?php
require_once('funciones/autoload.php');
//esta la cookie email creada
/*
if (isset($_COOKIE['email'])) {
    //aqui logeo al usuario
    $_SESSION['email'] = $_COOKIE['email'];
    //deberia de buscar al usuario en la BD (json)
    $_SESSION['avatar'] = '';
    $_SESSION['id'] = 1;
    $_SESSION['admin'] = false;
}

*/

  if(elUsuarioEstaLogueado()){
    $nombre= $_SESSION['nombre'];
    $email= $_SESSION['email'];
    $tel = $_SESSION['telefono'];
  }

    //logeado
    if (!isset($_SESSION ['email'] ))  {
        header('location:formularioRegistro.php');
    }
    //si es admin
    if ($_SESSION['admin']==true) {
        echo 'Ud es un Admin->>>>>>';
    }
    echo 'Bienvenido ' . $_SESSION['email'];

/*
<form class="" action="logout.php" method="post">
    <button type="submit" name="button">Deslogearme</button>
</form>
<a href="logout.php">Salir</a>
*/


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
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

    <link rel="stylesheet" href="css/miPerfil.css">
    <link rel="stylesheet" href="css/main.css">

    <title></title>
  </head>


  <body>

    <?php require("encabezado.php"); ?>

    <main>
      <div class="container">
        <div class="row contenedor">
        </form>
        <form action="miPerfil.php" enctype="multipart/form-data" method="post">
        <label for="imagen">Imagen:</label>
        <input id="imagenPerfil" name="imagen" size="30" type="file" />

        <input name="submit" type="submit" value="Guardar" />
        </form>
          <div class="col-12 col-lg-8">


            <div class="tituloPrincipal">
              <h1>Mi Perfil</h1>
              <h3>¡Mi cuenta!</h3>
            </div>



            <form id="formulario" method="post" action='miPerfil.php'>
              <div class="form-group">
                <p id="titulo-form"><b>Información Personal</b></p>
                <div class= "user_info">
                  <div class="form-group" >
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value='<?php echo $nombre; ?>'>
                  </div>
                  <div class="form-group">
                    <label for="tel">Telefono</label>
                    <input type="tel" class="form-control" name="telefono" value='<?php echo $tel; ?>'>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name='email' value='<?php echo $email; ?>'>
                  </div>


                  <div class="boton">
                    <button type="submit" class="btn btn_login" >Editar Perfil</button>



                  </div>

                  </div>

                </div>
            </form>


          </div>
          <div class="col-lg-3">

          </div>
        </div>


      </div>
    </main>


    <?php require("pieDePagina.php"); ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
