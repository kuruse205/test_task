<?php
session_start();

// Функция генерации короткого URL на основе оригинального
function generateShortUrl($originalUrl) {
    $hash = hash('crc32b', $originalUrl); // Пример хэширования оригинального URL
    return substr($hash, 0, 5); // Используем первые 5 символов хэша как короткий URL
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['original_url'])) {
    $originalUrl = $_POST['original_url'];
    $shortUrl = generateShortUrl($originalUrl);
    
    // Сохраняем соответствие короткого и оригинального URL в сессии
    $_SESSION[$shortUrl] = $originalUrl;

    // Перенаправляем обратно на форму с передачей короткого URL через GET параметр
    header('Location: index.php?short_url=' . $shortUrl);
    exit;
}