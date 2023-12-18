<?php

$hostDB = 'db';
$nombreDB = 'tareas';
$userDB = 'root';
$passwordDB = 'test';
try {
    $connexion = new PDO("mysql:host=$hostDB;dbname=$nombreDB", $userDB, $passwordDB);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    
}


?>