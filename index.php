<?php
// importo la funzione da usare nel mio programma
require __DIR__ . "/functions.php";
//variabile per mail ricevuta
$email = '';
// variabile per messaggio da stampare dopo controllo
$message = '';
// variabile che mi dice se mostrare il messaggio(dopo controllo) o no(al caricamento della pagina)
$show_msg = false;
// variabile dove salvo la classe da dare al messaggio in base a successo o no del controllo
$class_msg = '';

// caso sia successo che non con alert BOOSTRAP
if (!empty($_GET['email'])) {
  $email = trim($_GET['email']);
  $show_msg = true;
  $message = createMessage(checkEmail($email));
  $class_msg = checkEmail($email) ? 'alert-success' : 'alert-danger';
}
// caso successo reindirizzamento
if (checkEmail($email)) {
  session_start();
  $_SESSION['mail_registrazione'] = $email;
  header('Location: thankyou.php');
  die;
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
      <div class="alert  mt-3 <?php echo $class_msg ?>
      <?php if (!$show_msg) : ?> d-none <?php endif ?>" role="alert">
        <?php echo $message ?>
      </div>
    </div>
  </main>
</body>

</html>