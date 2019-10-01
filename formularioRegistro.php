<?php

  if($_POST){

    $email= $_POST['email'];
    $password= $_POST['password'];
    $nombreArchivo='';
    //me faltan las validaciones de formato email, email no repetido, password no vacio y password igual a confirmar password
    //si subio un archivo lo guardo en la carpeta avatars
    //pregunto si se subio el archivo exitosamente
    if ($_FILES['avatar']['error'] === 0) {
          //pido la extension del archivo
          $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
          if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
              $errorAvatar = 'archivo de formato invalido';
          } else {
              $nombreArchivo = $email . '.' . $ext;
              //voy a mover el archivo del temporal a mi carpeta avatars
              move_uploaded_file($_FILES['avatar']['tmp_name'], 'avatars/' . $nombreArchivo); //crear carpeta avatars
          }
      }


      //levanto mi archivo en formato json
      $archivo = file_get_contents('json/usuarios.json');
      //lo transformo a variables en php
      $usuarios = json_decode($archivo, true);
      $id = 0;
      foreach ($usuarios as $usuario) {
          if ($usuario['id'] > $id) {
              $id = $usuario['id'];
          }
      }
      $id++;



      $nombre= $_POST['nombre'];
      $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
      $telefono= $_POST['telefono'];

      //guardo los datos del usuario
      $usuario= [
        'nombre' => $nombre,
        'email' => $email,
        'password' => $password,
        'telefono' => $telefono,
        'avatar' => $nombreArchivo,
        'admin' => false,
        'id' => $id
      ];

      //agrego el usuario al array usuarios
      $usuarios[] = $usuario;

      $json= json_encode($usuarios);

      file_put_contents('json/usuarios.json', $json);

      //var_dump($usuario);
      //var_dump($json);


      header('location:formularioLogin.php');

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Livvic|Nunito|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contacto.css">
    <title></title>
  </head>
  <body>

      <?php require("encabezado.php"); ?>

      <main>
        <div class="container">
          <div class="row contenedor">
            <div class="col-lg-3">

            </div>
            <div class="col-12 col-lg-6">
                <div class="tituloPrincipal">
                  <h1>Registrate</h1>
                  <h3>¡Únete para hacer tus pedidos!</h3>
                </div>
              <form id="formulario" method='post'>
                <p id="titulo-form"><b>Ingresa tus Datos</b></p>
                <div class= "user_info">
                <div class="form-group" >
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" value="">
                </div>
                <div class="form-group">
                  <label for="tel">Telefono</label>
                  <input type="tel" class="form-control" name="telefono" value="">
                </div>
                <div class= form-group>
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="confirm-password">Confirmar Password</label>
                  <input type="password" class="form-control" id="confirm-password" name="confirm-password">
                </div>
                <div class="form-group">
                  <label for="avatar">Subir avatar</label>
                  <input type="file"  id="avatar" name="avatar">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
                  <label class="form-check-label" for="terminos">Acepto terminos y condiciones</label>
                </div>

                <div class="boton"> 
                  <button type="submit" class="btn btn_login" >Registrarse</button>
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
