<?php

//If Ternário
$year = 18;
$age = $year < 18 ? 'maior' : 'menor';
echo $year . ' é de: ' . $age;

//Null CAO
$age = $year ?? 'Não sabe...';
echo '<br> Qual sua idade: ' . $age;