<?php
// importo la funzione da usare nel mio programma
require __DIR__ . "/functions.php";

// caso di default al primo caricamento della pagina dove non mostro il messaggio d'errore
if (empty($_GET['email'])) {
  // variabile che da d-none al div col messaggio d'errore
  $show_msg = false;
}
// caso in cui ho inviato la mail
else {
  // salvo mail in una variabile
  $email = trim($_GET['email']);
  // salvo risultato del controllo su mail
  $email_result = checkEmail($email);
  // caso controllo positivo e reindirizzamento alla pagina thankyou.php
  if ($email_result) {
    session_start();
    $_SESSION['mail_registrazione'] = $email;
    header('Location: thankyou.php');
    die;
  }
  // caso controllo negativo e mostro messaggio d'errore
  $show_msg = true;
}


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
      <div class="alert  mt-3 alert-danger
      <?php if (!$show_msg) : ?> d-none <?php endif ?>" role="alert">
        L'email inserita non rispetto il formato richiesto, riprovarne una diversa
      </div>
    </div>
  </main>
</body>

</html>