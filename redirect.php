<?php
session_start();

if(isset($_GET['url'])) {
    $shortUrl = $_GET['url'];
    if(isset($_SESSION[$shortUrl])) {
        $originalUrl = $_SESSION[$shortUrl];
        header('Location: ' . $originalUrl);
        exit;
    } else {
        echo 'Короткая ссылка не найдена.';
    }
} else {
    echo 'URL не указан.';
}
