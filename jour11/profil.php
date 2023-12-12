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
    
    

    
/*
    session_start();
    
    if (!isset($_SESSION["login"]) && $_SESSION == 'admin' && !isset($_SESSION["password"]) && $_SESSION["password"] == "admin") { //si l'utilisateur n'est pas connecté on le redirige vers la page de connexion
        header("Location: connexion.php");
        exit();
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $password = $_POST["password"];
        $id = 
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("UPDATE utilisateur SET login = '$login', password = '$password' WHERE id = '$id'");  //on prépare la requête SQL pour modifier le login et le password de l'utilisateur connecté
        $user = $stmt->fetch(PDO::FETCH_ASSOC); //on exécute la requête SQL pour modifier le login et le password de l'utilisateur connecté
        $stmt->execute();
        exit();
    } else {
        $pdo = Database::connect();
        $login = $_POST["login"];
        $password = $_POST["password"];
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("SELECT * FROM utilisateur");
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->execute();
        $user = $stmt->fetch();
    }
    Database::disconnect();
    ?>
    
    <!DOCTYPE html>
    <html>
    <body>
    <form method="post">
        Login: <input type="text" name="login"  required><br>
        Password: <input type="password" name="password"  required><br>
        <input type="submit">
    </form>
    echo bienvenue <?php echo $_SESSION["login"]; ?>
    </body>
    </html>

*/















session_start();

if (!isset($_SESSION["login"]) && $_SESSION == 'admin' && !isset($_SESSION["password"]) && $_SESSION["password"] == "admin") { //si l'utilisateur n'est pas connecté on le redirige vers la page de connexion
    header("Location: connexion.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login2 = $_POST["login2"];
    $password2 = $_POST["password2"];
    $session = $_SESSION["login"];
    $pdo = Database::connect();

    // Assuming you have a PDO instance $db
  /*  $stmt = $pdo->prepare("SELECT id FROM utilisateur WHERE login = '$login'AND password = '$password'");
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $user["id"];*/
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt2= $pdo->prepare("UPDATE utilisateur SET login = '$login2', password = '$password2' WHERE login = '$session'"); //on prépare la requête SQL pour modifier le login et le password de l'utilisateur connecté 
    $stmt2->execute();
    $user = $stmt2->fetch(PDO::FETCH_ASSOC);
    echo "Votre login et votre password ont bien été modifiés";
   /* 
    var_dump($stmt);
    var_dump($id);
    var_dump($user);*/  
  //  var_dump($stmt2);
    //header("Location: connexion.php");

    exit();
} 
/*else {
    $login = $_POST["login"];
    $password = $_POST["password"];

    $pdo = Database::connect();
    $stmt = $pdo->prepare("SELECT id FROM utilisateur WHERE login = '$login', password = '$password'");
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $user["id"];


 
    $stmt2 = $pdo->prepare("SELECT * FROM utilisateur WHERE id = $id");
    $stmt2->execute();
    exit();
}
*/
Database::disconnect();
?>

<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nouveau login : <input type="text" name="login2" required><br>
    Nouveau password : <input type="password" name="password2" required><br>
    <input type="submit">
</form>
</body>
</html>