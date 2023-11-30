<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
        <input type ="text" name ="prenom"/>
        <input type="text" name="Nom" />
        <input type="submit" value="envoye" />

</form>
</body>
</html>




<?php


echo"<table border ='1'>
    <thead>
    <tr>
        <th>Prenom</th>
        <th>Nom</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>{$_GET["prenom"]}</td>
        <td>{$_GET["Nom"]}</td>
    </tr>
    </tbody>
    </table>";

?>