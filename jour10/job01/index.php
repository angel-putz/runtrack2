<?php 

class Database{

private static $servername = 'localhost';
private static $username = 'root';
private static $password = '';
private static $BDD ='jour09';
private static $conn = null;


public static function _construct(){
    die('Init function is not allowed');
}

public static function connect(){
    if (null == self::$conn){
        try{
            self::$conn = new PDO("mysql:host=".self::$servername.";"."dbname=".self::$BDD,self::$username,self::$password);
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

$sql ="SELECT * FROM etudiants";
?>
    <table border ='1'>
    <thead>
    <tr>
        <th>prenom</th>
        <th>nom</th>
        <th>naissance</th>
        <th>sexe</th>
        <th>email</th>
    </tr>
    </thead>

    <tbody>
    
        <?php
    foreach ($pdo->query($sql) as $row){echo"<tr>
        <td>".$row["prenom"] ." </td>
        <td>".$row["nom"]."</td>
        <td>".$row["naissance"]."</td>
        <td>".$row["sexe"]."</td>
        <td>".$row["email"]."</td>
    </tr>";}
        ?>
    </tbody>
    </table>
<?php

Database::disconnect();
?>
