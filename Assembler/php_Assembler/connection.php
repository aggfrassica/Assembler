<?php 
$user="root";
$pass="";
$dbname="Assembler";
try {
    $connection = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>