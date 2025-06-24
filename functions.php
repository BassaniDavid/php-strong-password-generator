<?php
// funzione
// $usaLettere = on, $usaNumeri = on, $usaSimboli = on
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
    $max = strlen($caratteri) - 1;

    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $caratteri[random_int(0, $max)];
    }

    return $password;
}


?>