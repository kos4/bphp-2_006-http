<?php
session_start();

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 0;

if ($_SESSION['count'] && $_SESSION['count'] % 3 === 0) {
  header('Location: count.php');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Учет посещений</title>
</head>
<body>
  <p>Сессия началась</p>
</body>
</html>
