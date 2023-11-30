<?php

$i = array(200, 204, 173, 98, 171, 404, 459);

foreach ($i as $nombre) {
    if ($nombre%2 ==0)
        echo $nombre , "<br>c'est pair</br>";
    else{
        echo $nombre , "<br>c'est impair</br>";
    }
}