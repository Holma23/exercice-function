<?php
function sinRD($x, $u)
{
    if ($u === "D") {
        $y = sin($x);
        $rd = "(" . $y . ")" . " D";
        $D = (($x * 180) / 3.14);
        $SD = sin($D);
        $rr = "(" . $SD . ")" . " R";
        echo $rd . "<br> " . $rr . "<br> ";
    } else if ($u === "R") {
        $y = sin($x);
        $rd = "(" . $y . ")" . " R";

        $D = $x * pi() / 180;
        $aDAffiche = "(" . $D . ")" . " D";

        echo $aDAffiche . "<br> " . $rd . "<br> ";
    } else {
        echo " Unité non valide ";
    }
}

sinRD((pi() / 2), "R");
sinRD(5, "D");
sinRD(2, "u");



