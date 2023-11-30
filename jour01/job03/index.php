<?php
$var1 = true;
$var2 = 10;
$var3 = "bonjour ";
$var4 = 0.5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <table>

    <tr>
        <td>
            Type
        </td>



        <td>
            Nom
        </td>



        <td>
            Valeurs
        </td>
    </tr>

    </table>
    </header>

    <?php
    echo "bool "."var1 ".$var1
    ?>
    <p>
    <?php
    echo "entier "."var2 ".$var2
    ?>
    </p>
    <p>
        <?php
    echo "texte "."var3 ".$var3
    ?>
    </p>
    <p>
        <?php
    echo "float "."var4 ".$var4
    ?>
    </p>
</body>
</html>