<?php

$str1 = "Hello";
$str2 = "World";

$str3 = $str1 . " " . $str2;

echo $str3;

echo "\n";

$date = "16 July";
$expanse = "512 TK";


$result = "On " . $date . " expanse are " . $expanse . "\n";

echo $result;


$result2 = "On {$date} Expanses are {$expanse}";
echo $result2;