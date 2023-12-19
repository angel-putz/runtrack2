<?php       

function leetspeak($string) {
    $string = str_replace("a", "4", $string);
    $string = str_replace("b", "8", $string);
    $string = str_replace("e", "3", $string);
    $string = str_replace("g", "6", $string);
    $string = str_replace("l", "1", $string);
    $string = str_replace("o", "0", $string);
    $string = str_replace("s", "5", $string);
    $string = str_replace("t", "7", $string);
    $string = str_replace("A", "4", $string);
    $string = str_replace("B", "8", $string);
    $string = str_replace("E", "3", $string);
    $string = str_replace("G", "6", $string);
    $string = str_replace("L", "1", $string);
    $string = str_replace("O", "0", $string);
    $string = str_replace("S", "5", $string);
    $string = str_replace("T", "7", $string);

    return $string;
}



echo leetspeak("Hello World");
?>
