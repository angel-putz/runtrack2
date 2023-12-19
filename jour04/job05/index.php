
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type ="text" name ="username"/>
        <input type="password" name="password" />
        <input type="submit" value="envoye" />
    </form>




</body>
</html>

<?php
$username1="";
$password="";


$username1 = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);


if($username1=="John" and $password == "Rambo"){
    echo "c'est pas ma guerre";
}
else{
    echo"Votre pire cauchemar";
}
