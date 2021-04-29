<?php
$arrayOdd = [1, 3, 5, 7, 9];
$arrayEven = [0, 2, 4, 6, 8];

$arrayTotal = [...$arrayOdd, ...$arrayEven];
print_r($arrayTotal);

echo '<br> Todos os números: ' . $arrayTotal;
echo $arraOdd[1];