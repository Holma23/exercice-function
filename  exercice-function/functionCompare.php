<?php
function compare($a, $b)
{
    $a > $b ? $affiche = "a:" . $a . " est Premier" . "<br>" : (($a === $b) ? $affiche = "a:" . $a . " et " . "b:" . $b . " sont egaux" . "<br>" : $affiche = "a:" . $a . " est Second" . "<br>");
    echo $affiche;
}

compare(10, 56);
compare(20, 20);
compare(23, 1);
