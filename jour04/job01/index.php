<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "get">
        <input type="text" name="Nom" />
        <input type="submit" value="envoye" />
</form>
</body>
</html>


<?php

$name=count($_GET);
echo 'Hello ' . $name . '!';


?>