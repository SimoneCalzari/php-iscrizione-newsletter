<?php
// Creare una pagina index.php con un form (che richiama la stessa pagina) per l'inserimento di un indirizzo email.
// Controllare che la mail  passata in GET sia ben formata e contenga un punto e una chiocciola.
// Usare un alert di Bootstrap (il componente HTML/CSS, non alert JS) per mostrare il messaggio di:
// successo: la mail contiene un punto e una chiocciola;
// errore: la mail NON contiene un punto e una chiocciola;

// Milestone 1
// Logica tutta dentro index.php, mostrare il messaggio di successo/errore dentro un alert di Bootstrap;

// Milestone 2
// Spostare la logica dentro functions.php (include);

// BONUS

// Milestone 3
// invece di usare una classe statica per lo stile dell’alert, modificarla in base all’esito della funzione.

// Milestone 4
// invece di visualizzare il messaggio di success nella index.php, in caso di esito positivo effettuare un redirect ad una thankyou page
// dove usiamo la session per mostrare anche l'indirizzo email con cui ci siamo "registrati"


if (!empty($_GET['email'])) {
  $mail = $_GET['email'];
  if (strrpos($mail, '@') === false && strrpos($mail, '.') === false) {
    echo 'mail non corretta';
  } else {
    echo 'mail corretta';
  }
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
    </div>
  </main>
</body>

</html>