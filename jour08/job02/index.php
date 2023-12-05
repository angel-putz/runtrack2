<?php
if(isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 3600);
    header("Location: index.php");
}
 else {
    $visites = ++$_COOKIE['nbvisites'];
    setcookie('nbvisites', $visites, time() + 3600);
    echo 'Nombre de visites : ' . $visites;
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
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>