
<?php
// Zusicherungen aktivieren und stumm schalten
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);

// Eine Handlerfunktion erzeugen
function my_assert_handler($file, $line, $code, $desc = null)
{
    echo "Zusicherung fehlgeschlagen in $file:$line: $code";
    if ($desc) {
        echo ": $desc";
    }
    echo "\n";
}

// Den Callback definieren
assert_options(ASSERT_CALLBACK, 'my_assert_handler');

// Fehlschlagende Zusicherungen
assert('2 < 1');
assert('2 < 1', 'Zwei ist kleiner als Eins');
?>
