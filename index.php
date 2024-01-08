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

<!-- Campo di testo -->
  <form action="final.php" method="post">
    <label for="testo">Testo:</label>
   <textarea name="testo" id="testo" cols="30" rows="1" placeholder="Inserisci il testo"></textarea>
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