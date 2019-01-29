<?php

function mach_joghurt1($typ = "rechtsdrehendes", $geschmack)
{
    return "Mache einen Becher $typ $geschmack-joghurt.\n";
}

//echo mach_joghurt1("Brombeer");   // arbeitet nicht wie erwartet


function mach_joghurt2($geschmack, $typ = "rechtsdrehendes")
{
    return "Mache einen Becher $typ $geschmack-Joghurt.\n";
}

echo mach_joghurt2("Brombeer");   // arbeitet wie erwartet.


?>