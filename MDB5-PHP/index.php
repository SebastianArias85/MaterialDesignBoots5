<!DOCTYPE html>
<html>
<head>
    <title>Mi Página Principal</title>

    <style>
    /* Estilos adicionales para el navbar fijo */
    body {
      padding-top: 0rem; /* Altura del navbar */
    }
    #navb {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000; /* Asegura que el navbar esté por encima de otros elementos */
    }
  </style>

</head>
<body>

<div id="navb">
    <?php include 'navbar.php'; ?>
</div>

<div id="head">
    <?php include 'head.php'; ?>
</div>

<div id="jumbotron">
    <?php include 'jumbotron.php'; ?>
</div>

<div id="columna">
    <?php include 'columna.php'; ?>
</div>

<div id="hora">
    <?php include 'hora.php'; ?>
</div>

</body>
</html>
