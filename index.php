<?php

  $contenido_archivo = file_get_contents('json/productos.json');
  $productos = json_decode($contenido_archivo, true);

?>

<!DOCTYPE html>
<html lang="es">

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
  <title>Home</title>
</head>

<body>

  <?php require("encabezado.php"); ?>

  <main>


    <div id="demo" class="carousel slide" data-ride="carousel">

      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <div class="carousel-inner container">

        <div class="carousel-item active">
          <img src="img/carrusel1.jpg" alt="Los Angeles">
        </div>
        <div class="carousel-item">
          <img src="img/carrusel2.jpg" alt="Chicago">
        </div>
        <div class="carousel-item">
          <img src="img/carrusel3.jpg" alt="New York">
        </div>
      </div>

      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>

      <section id="titulo1">

          <a name="productos"><h1>Nuestra Especialidad</h1>



      </section>

        <div class="contenedor">

            <?php foreach ($productos as $idProducto => $producto) { ?>
              <article class="elemento">
                <figure>
                    <img src="<?php echo $producto['img']?>"/>
                    <figcaption class="nombreArticulo"><?php echo $producto['nombre']?></figcaption>
                </figure>
                <a class="botoncomprar" href="vistaDelProducto.php">Comprar</a>
            </article>
            <?php } ?>
        </div>
        </section>
  </main>

  <?php require("pieDePagina.php"); ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>
