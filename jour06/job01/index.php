<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>choisir un style</p>
    <form method="post">
        <select name="style">
            <option value="style1.css">style1</option>
            <option value="style2.css">style2</option>
            <option value="style3.css">style3</option>
        </select>
        <input type="submit" value="envoye" />   
    </form>
</body>
</html>

<?php
if(isset($_POST["style"])) {
    $style = $_POST["style"];
    echo '<link rel="stylesheet" type="text/css" href="'.$style.'">';
}