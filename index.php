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


  <div class="container">
    <form class="row" action="final.php" method="post">

       <!-- Campo di testo -->
       <label for="testo" class="form-label">Testo:</label>
      <textarea name="testo" class="form-control" id="testo" cols="30" rows="3"></textarea> 

       <!-- Bad Words -->
      <label for="badword" class="mt-5">Bad-words:</label>
      <input type="text" id="badword" name="badword" placeholder="Inserisci le bad-words">
      <div class="col-12 p-0 mt-3">
        <button type="submit" class="btn btn-primary">Invia</button>
      </div>
    </form>
  </div>
</body>
</html>