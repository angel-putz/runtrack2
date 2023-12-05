<?php
session_start();

if (!isset($_SESSION['prenom'])) {
    $_SESSION['prenom'] = "";
}
if (isset($_POST['reset'])) {
    $_SESSION['prenom'] = "";
} 
else {
    $_SESSION['prenom'] = $_SESSION['prenom'] .$_POST['prenom'];
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="submit" name="submit" value="submit">
        <input type="submit" name="reset" value="Reset">
    </form>
    <br><?php  echo $_SESSION['prenom']; ?></br>
</body>
</html>