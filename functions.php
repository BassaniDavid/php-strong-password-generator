<?php

//variabili e valori base per lettere, simboli e numeri
$usaLettere = false;
$usaNumeri = false;
$usaSimboli = false;

// controllo per numero lunghezza password
isset($_GET["password"]) && $_GET["password"] >= 6 && $_GET["password"] <= 20 ? $lunghezza_password = (int)$_GET["password"] : $lunghezza_password = "ops! qualcosa è andato storto!" ;

// controllo per lettere, simboli e numeri e in caso siano stati checcati, modifica la variabile in true
isset($_GET["lettere"]) && $_GET["lettere"] == "on" ? $usaLettere = true : $usaLettere = false;
isset($_GET["numeri"]) && $_GET["numeri"] == "on" ? $usaNumeri = true : $usaNumeri = false;
isset($_GET["simboli"]) && $_GET["simboli"] == "on" ? $usaSimboli = true : $usaSimboli = false;

// funzione
function generaPassword($lunghezza,$usaLettere, $usaNumeri, $usaSimboli) {
    $lettere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()-_=+[]{}|;:,.<>?';

    $caratteri = '';

    if ($usaLettere) {
        $caratteri .= $lettere;
    }
    if ($usaNumeri) {
        $caratteri .= $numeri;
    }
    if ($usaSimboli) {
        $caratteri .= $simboli;
    }

    if ($caratteri === '') {
        return 'Errore: selezionare almeno un tipo di carattere.';
    }

    $password = '';
    
    for($i=0; $i < $GLOBALS['lunghezza_password']; $i++) {
        $random_pos = rand(0, strlen($caratteri) - 1);
        $random_car = substr($caratteri, $random_pos, 1);
        $password .= $random_car;
    }


    return $password;
}

?>