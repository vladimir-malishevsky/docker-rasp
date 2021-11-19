<?php
    const DB_HOST = 'mysql';
    const DB_NAME = 'building';
    const USERNAME = 'root';
    const PASSWORD = 'root';

    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, USERNAME, PASSWORD)
?>