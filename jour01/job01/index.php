<?php
$str = "la plateforme ";
$str2 = "vive ";
$str3 = " !";
$val = 6;
$myBool = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $str2  . $str . $str3 . $val;
    ?>

    <?php
    $val = $val + 4
    ?>

    <?php
    echo $val
    ?>

    <?php
    echo $myBool
    ?>

</body>
</html>