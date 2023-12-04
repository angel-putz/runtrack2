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

function cesar($str){
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


function gras($str){
    echo '<b>'. $str ."</b>";
}




function plateforme($str) {
    $truc = "/me/i";
    $modifiedStr = preg_replace($truc, 'me_', $str);
    echo $modifiedStr;
}




if(isset($_POST["style"])) {
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

