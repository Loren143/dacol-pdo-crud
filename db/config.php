<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_NAME', 's');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

/* define('DB_SERVER', 'localhost');
define('DB_NAME', 'u593341949_db_dacol');
define('DB_USERNAME', 'u593341949_dev_dacol');
define('DB_PASSWORD', '20212051Dacol'); */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>