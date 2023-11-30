<?php

$i="I'm sorry Dave I'm afraid I can't do that";

foreach (str_split($i) as $char){
   if(preg_match('/[aeiou]/i', $char)){
    echo $char;
   }
}





?>