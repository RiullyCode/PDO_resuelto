<?php
require_once("1_conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row">
    <?php foreach ($peliculas as $key => $peli) { ?>
    <div class="col-sm-12 col-md-6 col-lg-4">
      <h5> <?php echo ($peli['director']) ?></h5>
      <p> <?php echo ($peli['titulo']) ?></h5>
      <p> <?php echo ($peli['sinopsis']) ?></h5>
      <p> <?php echo ($peli['año']) ?></h5>
    </div>
    <?php } ?>
  </div>
</div>
</body>
</html>
