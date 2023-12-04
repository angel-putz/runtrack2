<?php

function occurence($str, $char){
    $count = 0;
    for($i=0; $i<strlen($str); $i++){
        if($str[$i] == $char){
            $count++;
        }
    }
    return $count;
}

echo occurence("Bonjour", "o"); 


?>