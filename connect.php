<?php
$serverName = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "blog";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   
    catch(PDOException $e) {
    echo "Greška pri povezivanju sa bazom podataka: " . $e->getMessage();
}
?>
