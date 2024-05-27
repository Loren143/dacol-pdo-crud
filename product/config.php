<?php

$host = 'localhost';
$dbname = 'u593341949_db_dacol';
$username = 'u593341949_dev_dacol';
$password = '20212051Dacol';

try {   
 $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 die("Database connection failed: " . $e->getMessage());
}

