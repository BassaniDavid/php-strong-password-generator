<?php

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
    <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>password generator</title>
  </head>
  <body class="bg-dark text-center">
    <header>
      <h1 class="text-info m-5">Strong Password Generator</h1>
      <h2 class="text-light mb-4">Genera una password sicura</h2>
    </header>
    <main class="text-light container">
      <div>
        <h3 class="mb-4">
          decidi le caratteristiche della tua nuova password e la genereremo per te!
        </h3>
      </div>
      
      <div class="card p-3">
        <form action="result.php" method="get">

          <div class="d-flex justify-content-around mx-5 mb-2">
            <!-- lunghezza password -->
            <label for="password">Lunghezza password:</label>
            <input type="number" name="password" id="password" min="6" max="20" />
          </div>

          <div class="d-flex justify-content-around mx-5 mb-4">
          <p>presenza di:</p>

          <div class="d-flex flex-column">
            <div><!-- presenza di lettere -->
            <label for="lettere">lettere</label>
              <input type="checkbox" name="lettere" id="lettere">
            </div>
            
            <div><!-- presenza di numeri -->
            <label for="numeri">numeri</label>
              <input type="checkbox" name="numeri" id="numeri">
            </div>
            
            <div><!-- presenza di simboli -->
            <label for="simboli">simboli</label>
              <input type="checkbox" name="simboli" id="simboli">
            </div>
            
          </div>

          </div>
  
          <button type="submit" class="btn btn-primary mb-2">invia</button>
        </form>
      </div>
    </main>
  </body>
</html>
