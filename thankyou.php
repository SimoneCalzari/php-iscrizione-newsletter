<?php

session_start();
$mail =  $_SESSION['mail_registrazione'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank you</title>
</head>

<body>
  <h1>Grazie per esserti registrato con la mail <?php echo $mail ?></h1>
</body>

</html>