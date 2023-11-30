<?php
$i=0;


while($i<100){
    $i=$i+1;
if( $i%3==0  ){
    echo "<br>" ,"Fizz", "</br>";
}
elseif ($i%5==0){
    echo "<br>" ,"Buzz", "</br>";
}
elseif($i%3==0 and $i%5 ==0){
    echo "<br>","FizzBuzz" ,"</br>" ;
}
else{
    echo "<br>",$i , "</br>";
}

}
?>