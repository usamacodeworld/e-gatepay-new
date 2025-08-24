<?php
$host = 'localhost';
$db   = 'egatepay_db';
$user = 'egatepay_user';
$pass = '#IVSB?lIBUSItAjt';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "✅ DB Connected successfully.";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}


