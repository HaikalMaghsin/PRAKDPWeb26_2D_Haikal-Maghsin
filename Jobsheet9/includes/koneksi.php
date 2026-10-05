<?php

// Kredensial lokal tidak dimasukkan ke Git.
if (is_file(__DIR__ . '/koneksi.local.php')) {
    require __DIR__ . '/koneksi.local.php';
    return;
}

$host = getenv('DB_HOST') ?: 'localhost';
$port = getenv('DB_PORT') ?: '5432';
$db = getenv('DB_NAME') ?: 'simpus_mini';
$user = getenv('DB_USER') ?: 'postgres';
$pass = getenv('DB_PASS') ?: '';
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);
