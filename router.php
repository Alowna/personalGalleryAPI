<?php

// GLOBAL CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// gets the request path
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $path;

// if real file (image, json, etc), serve it manually
if (is_file($file)) {

    // define correct content-type 
    $ext = pathinfo($file, PATHINFO_EXTENSION);

    match ($ext) {
        'webp' => header("Content-Type: image/webp"),
        'jpg', 'jpeg' => header("Content-Type: image/jpeg"),
        'png' => header("Content-Type: image/png"),
        'json' => header("Content-Type: application/json"),
        default => header("Content-Type: application/octet-stream"),
    };

    readfile($file);
    exit;
}

// fallback API
include __DIR__ . "/posts.php";