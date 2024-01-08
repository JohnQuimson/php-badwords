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

<!-- Campo di testo -->
  <form action="final.php" method="post">
    <label for="phpbadword">Testo:</label>
    <input type="text" id="phpbadword" name="badword" placeholder="Inserisci il testo">
    <button>invia</button>
  </form>

<!-- Bad Words -->
  <form action="final.php" method="post">
    <label for="phpbadword">Bad-words:</label>
    <input type="text" id="phpbadword" name="badword" placeholder="Inserisci le bad-words">
    <button>invia</button>
  </form>

</body>
</html>