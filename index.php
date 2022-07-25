<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous">

    <!-- Bootstrap - Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- CSS locales -->
    <link href="css/estilo-header.css" rel="stylesheet">
    <link href="css/estilo-instituto-presentacion.css" rel="stylesheet">
    <link href="css/estilo-todasLasCarreras.css" rel="stylesheet">
    <link href="css/estilo-sobreElInstituto.css" rel="stylesheet">

    <title> Instituto de Educación Superior Nº9 </title>

  </head>

  <body>


    <header  id="panelNav">
      <?php
        require 'references/header.php'
       ?>
       <?php
        require 'references/section_header.php'
       ?>
    </header>

    <!-- Panel de carreras -->
    <section id="panelBaseTCarreras">
      <?php
        require 'references/articulo_carreras.php'
       ?>
    </section>

    <section id="panelNav">
      <?php
        require 'references/sobre_instituto.php'
       ?>
    </section>

    <!-- JQuery -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous">
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous">
    </script>

  </body>

</html>
