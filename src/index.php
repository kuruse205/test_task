<?php
session_start();

function generateShortUrl($originalUrl) {
    $hash = hash('crc32b', $originalUrl); 
    return substr($hash, 0, 5); 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['original_url'])) {
    $originalUrl = $_POST['original_url'];
    $shortUrl = generateShortUrl($originalUrl);
    
    
    $_SESSION[$shortUrl] = $originalUrl;


    header('Location: index.php?short_url=' . $shortUrl);
    exit;
}