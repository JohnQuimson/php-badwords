<?php

$testo = $_POST["testo"];
$badword = $_POST["badword"];
$replace = str_replace($badword, "***", $testo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>PHP Badwords</h1>

  <main>

    <!-- Raw text -->
    <strong>Raw Text</strong>
    <p>
      <?php 
        echo $testo;
      ?>
    </p>

    <strong>Modified</strong>
    <p>
      <?php 
        echo $replace;
      ?>
    </p>


  </main>

</body>
</html>