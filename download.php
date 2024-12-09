<?php
if (isset($_GET['text'])) {
  $text = $_GET['text'];
  header('Content-type: text/plain');
  header('Content-Disposition: attachment; filename="text.txt"');
  echo $text;
} else {
  ?>
  <!doctype html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ошибка</title>
  </head>
  <body>
    <p>Ошибка. Текст не передан</p>
  </body>
  </html>
  <?php
}