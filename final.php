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

   <!-- Boostrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Boostrap CSS -->
  
  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>PHP Bad-words</h1>

  <main>

  <div class="container">

    <!-- Raw text -->
    <div class="cont-raw">
      <strong>Raw Text</strong>
    <p class="testo">
      <?php 
        echo $testo;
      ?>
    </p>
    <p>Sono presenti:  <span><?php echo strlen($testo); ?></span> caratteri.</p>
    </div>

    <!-- Modified -->
   <div class="cont-modified">
     <strong>Modified</strong>
    <p class="testo">
      <?php 
        echo $replace;
      ?>
    </p>
         <p>Sono presenti:  <span><?php echo strlen($replace); ?></span> caratteri.</p>

   </div>
</div>
  </main>

</body>
</html>