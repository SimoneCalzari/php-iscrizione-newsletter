<?php
// funzione che controlla se la mail contiene partendo da fine stringa sia una chiocciola che un punto
function checkEmail($mail)
{
  if (strrpos($mail, '@') === false || strrpos($mail, '.') === false) {
    return false;
  }
  return true;
}
// funzione che restituisce un messaggio come stringa a seconda che si abbia avuto successo o meno
function createMessage($success)
{
  if ($success) {
    return 'L \'email inserita rispetta il formato richiesto';
  }
  return 'L \'email inserita NON rispetta il formato richiesto';
}
