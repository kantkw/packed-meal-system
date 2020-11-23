<?php

$serverName = "localhost";
$username = "light";
$password = "";
$dbName = "packedmealsystem";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName, $username, $password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    $e->getMessage();
}

?>