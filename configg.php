<?php
  
    define('USER', 'u955232666_travelvj');
    define('PASSWORD', '0536282554aB$');
    define('HOST', '127.0.0.1');
    define('DATABASE', 'u955232666_TravelVJ');
    try {
        $conn = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
        echo'success';
    
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>