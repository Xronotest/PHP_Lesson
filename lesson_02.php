<?php
echo "<h3>Типы данных - Булево</h3>";
$b = false;
$b = true;

echo $b; //1

echo "<h3>Соединение строк и чисел</h3>";

$i = 1;
$s = 'Привет';
# echo $s+$i; //Ошибка
# echo $s+(string)$i; //Ошибка знака +
# echo $s+$s; //Ошибка знака +

echo $s.$i; //Соединение через точку

echo "<hr>";
//В двоёных кавычках можно внести изменения
echo "Вставка в строку {$s}";
echo "<br>";
echo "Число i = {$i}";

echo "<hr>";
var_dump($s);

echo "<h3>Массивы</h3>";
$person[]="Хлеб";
var_dump($person);