<?php
  $idProducto = $_GET['producto'];
  $contenido_archivo = file_get_contents('json/productos.json');
  $productos = json_decode($contenido_archivo, true);
  $producto = $productos[$idProducto];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Livvic|Nunito|Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script&amp;display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/main.css">
  <title>Agregar Producto</title>
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
                  <h1>Agrega un Producto</h1>
                </div>

              <form id="formulario" method='post'>
                <div class= "user_info">
                <div class="form-group" >
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" value="<?=$producto['nombre']?>">
                </div>
                <div class="form-group">
                  <label for="precio">Precio</label>
                  <input type="text" class="form-control" name="precio" value="<?=$producto['precio']?>">
                </div>
                <div class="form-group">
                  <label for="ImagenNueva">Imagen</label>
                  <input type="file"  id="ImagenNueva" name="ImagenNueva">
                </div>
                <div class="boton">
                  <button type="submit" class="botoncomprar">Agregar</button>
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


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </main>
</body>
</html>
