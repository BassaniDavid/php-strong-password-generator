<?php

isset($_GET["password"]) && $_GET["password"] >= 6 && $_GET["password"] <= 12 ? $lunghezza_password = (int)$_GET["password"] : $lunghezza_password = "ops! qualcosa è andato storto!" ;

//echo $lunghezza_password;
//echo $frase_apertura;

//includo la funzione
require_once './functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
      <h1>Strong Password Generator</h1>
      <h2>Genera una password sicura</h2>
    </header>
    <h3>Ecco la tua nuova password nuova fiammante!</h3>
    <div>
        <div>
        <?php
          if(is_string($lunghezza_password)){
            echo $lunghezza_password;
          }else{
           echo generaPassword($lunghezza_password,true,true,true);
          }
        ?>
      </div>
    </div>
</body>
</html>