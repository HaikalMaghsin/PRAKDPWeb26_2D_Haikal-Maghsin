<?php
// Kredensial komputer ini disimpan terpisah dan tidak diunggah ke Git.
if (is_file(__DIR__ . '/koneksi.local.php')) {
    require __DIR__ . '/koneksi.local.php';
    return;
}

$host = getenv('DB_HOST') ?: 'localhost';
$port = getenv('DB_PORT') ?: '5432';
$db   = getenv('DB_NAME') ?: 'simpus_mini';
$user = getenv('DB_USER') ?: 'postgres';
$pass = getenv('DB_PASS') ?: 'postgres';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Koneksi database gagal. Pastikan PostgreSQL berjalan, database sudah dibuat, dan kredensial DB_* sudah sesuai.');
}
