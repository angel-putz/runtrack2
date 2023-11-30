<?php
$str="Certaines choses changent, et d'autres ne changeront jamais";
$str2= strlen($str);


for($g=0 ;$g<$str2 ; $g++){
    if($g==$str2 -1){
        echo $str[0];
    }
    else{
        echo $str[$g+1];
    }

}


?>