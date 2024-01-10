<?php
// funzione che controlla se la mail contiene partendo da fine stringa sia una chiocciola che un punto
function checkEmail($mail)
{
  if (strrpos($mail, '@') === false || strrpos($mail, '.') === false) {
    return false;
  }
  return true;
}
