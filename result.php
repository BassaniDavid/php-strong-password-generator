<?php

//includo la funzione
require_once './functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark text-center">
    <header>
      <h1 class="text-info m-5">Strong Password Generator</h1>
      <h2 class="text-light mb-4">Genera una password sicura</h2>
    </header>
    <main class="text-light container">
    <h3>Ecco la tua nuova password nuova fiammante!</h3>
    <div class="card p-3 m-5">
        <div class="fs-1 fw-bolder">
        <?php
          if(is_string($lunghezza_password)){
            echo $lunghezza_password;
          }else{
           echo generaPassword($lunghezza_password,$usaLettere,$usaNumeri,$usaSimboli);
          }
        ?>
      </div>
    </div>
    </main>
</body>
</html>