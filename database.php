<?php
$dsn = 'mysql:host=localhost;dbname=althealth';
$username = 'root';
$password = 'password';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    exit;
}

function display_db_error($error_message) {
    global $app_path;
    exit;
}
?>