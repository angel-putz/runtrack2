<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nombre">Nombre</label><br>
        <input type ="nomber" id="nombre" name ="nombre"/>
        <input type="submit" value="envoye" />
    </form>
</body>
</html>

<?php
$nombre="";

$nombre = $_POST["nombre"];



if($nombre%2==0){
    echo "nombre pair";
}
else{
    echo"nombre impair";
}


?>