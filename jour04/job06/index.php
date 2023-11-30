<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type ="nomber" name ="nombre"/>
        <input type="submit" value="envoye" />
    </form>
</body>
</html>

<?php

$nombre = $_POST["nombre"];



if($nombre%2==0){
    echo "nombre pair";
}
else{
    echo"nombre impair";
}


?>