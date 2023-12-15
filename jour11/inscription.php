<?php


class Database{

private static $servername = 'localhost';
private static $username = 'root';
private static $password = '';
private static $BDD ='moduleconnexion';
private static $conn = null;


public static function _construct(){
    die('Init function is not allowed');
}

public static function connect(){ //fonction de connexion à la BDD
    if (null == self::$conn){ //si la connexion est nulle
        try{ //on essaie de se connecter
            self::$conn = new PDO("mysql:host=".self::$servername.";"."dbname=".self::$BDD,self::$username,self::$password); //on se connecte à la BDD
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    return self::$conn;
}

public static function disconnect(){
    self::$conn = null;
}

}

$pdo = Database::connect();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password != $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // 
        $sql="INSERT INTO utilisateur (login, prenom , nom , password) VALUES ('$login', '$prenom' ,'$nom' ,'$password')";
        $stmt = $pdo->prepare($sql); //on prépare la requête SQL
        $stmt->execute(); //on exécute la requête SQL
        header("Location: connexion.php");
        exit();
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Login: <input type="text" name="login" required><br>
    Prenom: <input type="text" name="prenom" required><br>
    Nom: <input type="text" name="nom" required><br>
    Password: <input type="password" name="password" required><br>
    Confirm Password: <input type="password" name="confirm_password" required><br>
    <input type="submit">
</form>
</body>
</html>