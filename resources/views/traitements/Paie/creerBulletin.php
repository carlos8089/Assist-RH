<?php 
$servername="localhost";
$username="root";
$password="";

try {
    //code...
    $connection = new pdo("mysql:host=$servername;db=assistrh",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOExeption $e) {
    //throw $th;
    echo "Connexion refusée à la base de donnée:".$e->getMessage;
}

?>