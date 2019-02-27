<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Esercizio php</title>
  </head>
  <body> 
    <div class="container-fluid">
      <div class="row">
        <ul>
          <?php$A = ["kiwi","arancia","mela"];
          for ($B=0;$B<count($A);$B++)
          {
            print '<li>'. $A[$B].'<li>';
          }
          ?>
        </ul>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src=js/bootstrap.min.js"></script>
  </body>
</html>
