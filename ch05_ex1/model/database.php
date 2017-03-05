<?php
    $dsn = 'mysql:host=sql2.njit.edu; dbname=arg58';
    $username = 'arg58';
    $password = 'BVYpu8iYf';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>