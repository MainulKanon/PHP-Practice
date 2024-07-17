<?php
declare(strict_types=1);

echo PHP_EOL;
function sum1($x, $y, $z)
{
    return $x + $y + $z;
}

echo sum1(1, 2, 3);

echo PHP_EOL;
function sum2($x, $y, $z)
{

    echo ($x + $y + $z);
}

sum2(1, 2, 3);