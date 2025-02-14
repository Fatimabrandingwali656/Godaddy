<?php
$host = 'localhost';
$dbname = 'db8vlizae7tkgt';
$username = 'ukmaobpmpapii';
$password = 'lzwm3wnr2baq';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
