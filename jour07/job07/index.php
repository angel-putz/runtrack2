<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post"> 
        <select name="style">
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>
        <input type="text" name="mot" />
        <input type="submit" value="envoye" />   
    </form>
</body>
</html>

<?php

function cesar($str){ // fonction qui permet de faire un décalage de 1
    $str2= strlen($str);
    for($g=0 ;$g<$str2 ; $g++){
        if($g==$str2 -1){
            echo $str[0];
        }
        else{
            echo $str[$g+1];
        }
    }
}


function gras($str){ // fonction qui permet de mettre en gras
    echo '<b>'. $str ."</b>";
}




function plateforme($str) {  // fonction qui permet de mettre en minuscule et de remplacer les "me" par "me_"
    $truc = "/me/i";
    $modifiedStr = preg_replace($truc, 'me_', $str);
    echo $modifiedStr;
}




if(isset($_POST["style"])) { // permet de vérifier si le formulaire a été envoyé et si le style est bien défini
    $style = $_POST["style"];
    if($style == "gras"){
        gras($_POST["mot"]);
    }
    if ($style == "cesar"){

        cesar($_POST["mot"]);

    }
    if ($style == "plateforme"){
        plateforme($_POST["mot"]);
}

}



?>

