<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>Вітаю<h1\> ";
?>
  <p>Ваше ім'я, <?= $_GET["name"];?>! Прізвище<?=$_GET["prizve"];?> Ви народилися <?= $_GET["date"];?> Країна  <?= $_GET["kraina"];?> Місто <?= $_GET["misto"];?> </p>
</body>
</html>


