# PHP Iscrizione Newsletter

## Descrizione

Il progetto consiste in una pagina PHP di iscrizione ad un'ipotetica newsletter in cui troviamo un form con due elementi:
- Input di testo per inserire una mail.
- Pulsante per inviare la mail inserita(alla pagina stessa).

Cliccando sul button viene controllato se nella mail sono presenti una "@" e un ".", a seconda dell'esito di questo check si hanno due possibili scenari:
- Success: si viene reindirizzati ad un'altra pagina PHP dove si riceva una messaggio di ringraziamenti e si mostra la mail con cui si ci è registrati.
- Error: si viene rimandata alla stessa pagina del form, ma sotto di esso compare un messaggio di errore. 
