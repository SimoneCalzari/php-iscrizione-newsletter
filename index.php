<?php
// importo la funzione da usare nel mio programma
require __DIR__ . "/functions.php";

// salvo la mail ricevuta in una variabile
$email = $_GET['email'] ?? '';
// messaggio di successo o errore
$message = checkEmail($email)[0];
// variabile per dire se mostrare il messaggio o no
$show_msg = checkEmail($email)[1];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Newsletter</title>
  <!-- BOOSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- /BOOSTRAP -->
</head>

<body>
  <header>
    <h1 class="text-center py-3">PHP Newsletter</h1>
  </header>
  <main>
    <div class="container">
      <form action="index.php" method="GET">
        <div class="mb-3">
          <label for="mail" class="form-label">Email address</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Insert your email...">
        </div>
        <button class="btn btn-primary ">Invia</button>
      </form>
      <div class="alert alert-info mt-3 <?php if (!$show_msg) : ?> d-none <?php endif ?>" role="alert">
        <?php echo $message ?>
      </div>
    </div>
  </main>
</body>

</html>