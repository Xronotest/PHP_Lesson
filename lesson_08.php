<?php
// 10/3 = 

echo "<h3>Форматирование чисел</h3>";
echo (10/3)." руб. ";
echo "<hr>";

printf("Строка формата: %f <br>", 10/3); //3.333333

printf("Строка формата: %1.2f <br>", 10/3);

printf("Строка формата: %010.2f <br>", 10/3);

$m = 0.01;
//Вес : 0.010 кг.
printf("Вес: %0.3f кг <br>", $m);
$m = 1;
printf("Вес: %0.3f кг <br>", $m);

$m = 1.2;
printf("Вес: %0.0f кг <br>", $m);

echo "<h3>Функции и области видимости</h3>";

function calc($a,$b) {
    return $a+$b;
}

echo calc(1,2);
echo "<br>";

$i =1;
function test() {
    global $i;
    $i =10;
    return $i;
}
echo test()."<br>";
echo $i."<br>";

$sum = 0;
function sum($a) {
    global $sum;
    $sum = $sum + $a;
    return $sum;
}
echo sum(10)."<br>";
echo sum(5)."<br>";
echo sum(1)."<br>";

$sum2 = 0;
function sum2($a) {
    static $sum2 =0;
    $sum2 = $sum2 + $a;
    return $sum2;
}
echo sum2(10)."<br>";
echo sum2(5)."<br>";
echo sum2(1)."<br>";

echo "<h3>Сессии</h3>";
//Функция isset() - проверяет на существование данных 

session_start();

var_dump($_SESSION);
echo "<hr>";

for ($i=1;$i<=10;$i++) {
if (isset($_SESSION['hits'])) {
    $_SESSION['hits'] = $_SESSION['hits'] +1;
} else {
    $_SESSION['hits'] = 1;
}
echo "Эту страницу смотрели ".$_SESSION['hits']." раз.<br>";
}

echo "<h3>Печеньки COCKIE</h3>";
var_dump($_COOKIE);

setcookie("test","123");
setcookie("name","student");

echo "<h3>Адресная строка и GET</h3>";
//http://localhost/PHP_Lesson/lesson_08.php?a=1
var_dump($_GET);
echo "<hr>";
?><a href="?a=1">Параметр a=1</a><br><?php
?><a href="?a=2">Параметр a=2</a><br><?php
?><a href="?a=3">Параметр a=3</a><br><?php
?><a href="?a=4">Параметр a=4</a><br><?php

echo "<hr>";
if (isset($_GET["a"])) {
    echo "Получение a=".$_GET["a"];
}