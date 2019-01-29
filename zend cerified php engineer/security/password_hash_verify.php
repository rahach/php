<?php
// Siehe auch das password_hash() Beispiel in diesem Kontext
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Valides Passwort!';
    echo PHP_EOL;
    echo $hash;
    echo PHP_EOL;    
} else {
    echo 'Invalides Passwort.';
}
?>