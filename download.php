<?php
$text = $_GET['text'];
header('Content-type: text/plain');
header('Content-Disposition: attachment; filename="text.txt"');
echo $text;