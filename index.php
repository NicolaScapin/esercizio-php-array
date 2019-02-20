<?php 
  $vedi_lista=$_GET['lista'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body> 

    <?php 
      if ($vedi_lista =='si'){ 
    ?>

    <ul>
    <?php
    $a=['arancia', 'carota', 'limone', 'fragola', 'anguria',];

    foreach ($a as $nome)

    {
      print '<li>'.$nome.'</li>';
    }

    ?>
  </ul>

  <?php
    }
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src=js/bootstrap.min.js"></script>
  </body>
</html>
