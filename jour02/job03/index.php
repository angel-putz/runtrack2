<?php
$i=0;


while($i<100){
    $i=$i+1;
if($i<=20){
    echo "<br>" ,"<i> ",$i ,"</i>", "</br>" ;
}
if($i >20 and $i<25){
    echo "<br>",$i,"</br>";
}
if(25<=$i and $i<50){
    echo "<br>" ,"<u> ", $i ,"</u>" ,"</br>";
}
if($i==42){
    echo"la plateforme";
}
if($i >49 and $i<100){
    echo "<br>",$i,"</br>";
}


}



?>