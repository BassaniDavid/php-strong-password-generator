<?php

$frase_apertura = "Nessun parametro valido inserito";

isset($_GET["password"]) && $_GET["password"] >= 6 && $_GET["password"] <= 12 ? $lunghezza_password = (int)$_GET["password"] : $lunghezza_password = "parametro non valido" ;

//echo $lunghezza_password;
//echo $frase_apertura;

//includo la funzione
require_once './functions.php';


?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>password generator</title>
  </head>
  <body>
    <header>
      <h1>Strong Password Generator</h1>
      <h2>Genera una password sicura</h2>
    </header>
    <main>
      <div>
        <?php
          if(is_string($lunghezza_password)){
            echo $lunghezza_password;
          }else{
           echo generaPassword($lunghezza_password,true,true,true);
          }
        ?>
      </div>
      <form action="index.php" method="get">
        <label for="password">Lunghezza password</label>
        <input type="number" name="password" id="password" min="6" max="20" />
        <button type="submit">Clicca qui per generare la tua nuova password</button>
      </form>
    </main>
  </body>
</html>
