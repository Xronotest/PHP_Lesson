<?php
echo "Hey";

// Комент
# Коментарий
/* Прикольный комент
*/

// phpinfo();

echo "<h3>Команды echo</h3>";
echo "<hr>";
echo rand(1,10);
echo "<hr>";
echo "Случайное число = ".rand(1,10);

echo "<h3>Переменные</h3>";
// Меню переменных регистро зависимых
$name = "маленькими буквами";
$NAME = "БОЛЬШИМИ БУКВАМИ";

echo $name;
echo "<hr>";

echo "<h3>Функции и их имена</h3>";
function calc($a,$b) {
    return $a+$b;
}

echo "1+2 = ".calc(1,2);
echo "<hr>";
echo "1+2 = ".CALC(1,2); // Регистро независимые имена

echo "<h3>Типы";