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


  <form action="final.php" method="post">

    <!-- Campo di testo -->
    <label for="testo">Testo:</label>
   <textarea name="testo" id="testo" cols="30" rows="2" placeholder="Inserisci il testo"></textarea>
    
   <!-- Bad Words -->
   <label for="badword">Bad-words:</label>
    <input type="text" id="badword" name="badword" placeholder="Inserisci le bad-words">
    <button>invia</button>
  </form>


  
    
  

</body>
</html>