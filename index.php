<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
</head>
<body>
    <form action="shorturl.php" method="post">
        <label for="original_url">Введите оригинальный URL:</label><br>
        <input type="text" id="original_url" name="original_url"><br>
        <button type="submit">Создать короткую ссылку</button>
    </form>
    
    <?php
    if (isset($_GET['short_url'])) {
        echo "<p>Ваш короткий URL: http://". $_GET['short_url'] ."</p>";
    }
    ?>
</body>
</html>
