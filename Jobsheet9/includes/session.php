<?php

$sessionPath = __DIR__ . '/../storage/sessions';
if (!is_dir($sessionPath)) {
    mkdir($sessionPath, 0775, true);
}

if (session_status() === PHP_SESSION_NONE) {
    session_save_path($sessionPath);
    session_start();
}
