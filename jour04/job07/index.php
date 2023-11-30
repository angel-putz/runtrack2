<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type ="nomber" name ="hauteur"/>
        <input type ="nomber" name ="largeur" />
        <input type="submit" value="envoye" />
    </form>
</body>
</html>



<?php

$largeur = $_POST["largeur"];
$hauteur = $_POST["hauteur"];


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
        $texte=$texte.'_';
    }
}
$texte=$texte.' \\';
echo $texte;
echo'<br>';
}

/*
for ($h = 1; $h <= $hauteur; $h++) {
    for ($f = 1; $f <= $largeur; $f++) {
        // Afficher le caractère vertical "|" pour les bords, et "_" pour l'intérieur
        if ($h == 1 || $f == 1 ) {
            echo '|';
        } else {
            echo '_';
        }
    }
    // Passer à la ligne après chaque ligne du rectangle
    echo '<br>';
}s
*/

echo '<div style="width: ' . $largeur*4 . 'vh; height: ' . $hauteur*4 . 'vh; border: 1px dashed black;">';
?>