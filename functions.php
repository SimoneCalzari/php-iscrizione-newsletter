<?php
// funzione con argomento una mail da controllare, restituisce un array con un messaggio e un valore booleano per mostrare il messaggio o no
function checkEmail($mail)
{
  if (empty($mail)) {
    return ['', false];
  }
  if (strrpos($mail, '@') === false || strrpos($mail, '.') === false) {
    return ['L\'email inserita NON rispetta il formato richiesto.', true];
  } else {
    return ['L\'email inserita rispetta il formato richiesto.', true];
  }
}
