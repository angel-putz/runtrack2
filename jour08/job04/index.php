<?php
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // unset the 'prenom' cookie
    header('Location: index.php'); // refresh the page
}

if (isset($_POST['prenom'])) {
    setcookie('prenom', $_POST['prenom'], time() + 3600); // set the 'prenom' cookie
    header('Location: index.php'); // refresh the page
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
    <?php if (isset($_COOKIE['prenom'])): ?>
        Bonjour <?php echo $_COOKIE['prenom']; ?>!
        <form method="post">
            <input type="submit" name="deco" value="Déconnexion">
        </form>
    <?php else: ?>
        <form method="post">
            <input type="text" name="prenom" placeholder="prenom">
            <input type="submit" name="connexion" value="Connexion">
        </form>
    <?php endif; ?>
</body>
</html>