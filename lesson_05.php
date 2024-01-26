<?php
echo "<h3>Строки</h3>";
$s = "Привет, мир!";
echo $s;
echo "<br>";

echo "Длинна:".strlen($s);
echo "<br>";

echo "Символы:".mb_strlen($s);
echo "<br>";

$s = "Привет, мир!";
$s1 = str_replace("мир","Асбест",$s);
echo $s1;
echo "<br>";

echo "<h3>Как дела?</h3>";

$x = rand(-10,10);
if ($x<0) {
    echo "Число ".$x." Отрицательные";
} else {
    echo "Число ".$x." Положительное";
}
echo "<br>";

$x = rand(0,10);
if ($x % 2 == 0) {
    echo "Число ".$x." Чёт";
} else {
    echo "Число ".$x." Нечёт";
}
echo "<hr>";

$x = 0;
for ($i = -100;$i<=0;$i++) {
    echo "| ".$i;
}

echo "<hr>";

for ($i = 1000;$i<=1100;$i++) 
if ($i % 7 == 0) {
    echo "| ".$i;
}
echo "<hr>";

$s = 0;
for ($i = 1;$i<=1000000;$i*=2) {
    echo $i.", "; 
}
echo "<hr>";