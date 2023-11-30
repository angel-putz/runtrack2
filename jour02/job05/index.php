<?php
$n=1000;
//on prend les nombre entre 2 et 1000
for ($i=2; $i<=$n;$i++){
    $g=0;    //on compte le nombre de diviseur
    for($j=1;$j<=$i;$j++){
        if($i%$j==0){
            $g++;
        }
    }
    if($g==2){
        //un nombre premier est un chiffre qui possede que 2 diviseur 1 et luimeme
        echo $i."<br />";
    }
}
?>