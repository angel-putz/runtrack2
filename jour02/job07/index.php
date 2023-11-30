<?php
$hauteur = 5;
for ($i =0; $i<=($hauteur-1);$i++){
    $prefixeEspace=(($hauteur-1)-$i)*2;
    $interEspace=$i*2;

    $texte=' ';
for ($j=1;$j<=$prefixeEspace;$j++){
    $texte = $texte.'<span style="color:white">.</span>';
}
$texte=$texte.'/';


for ($j=1; $j<=$interEspace;$j++){
    if($i==($hauteur-1)){
        $texte=$texte.'_';

    }else{
        $texte=$texte.'&nbsp&nbsp';
    }
}
$texte=$texte.' \\';
echo $texte;
echo'<br>';
}

?>