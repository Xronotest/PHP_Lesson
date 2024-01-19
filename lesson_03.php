<?php
echo "<h3>Циклы</h3>";
// for (Инициализация;Условие;Действие)
for ($i = 0; $i < 10; $i++): // Двоеточие
    echo '$i='.$i;
    echo '<br>';
endfor;

echo '<hr>';
$i = 0;
while ($i < 10): // Двоеточие
    echo '$i='.$i;
    echo '<br>';
    $i++;
endwhile;

echo "<h3>Условие IF - ELSE</h3>";
if (1===1) { //Точно равно!!! ну очень точно!!!
    echo "1===1" ;
}
if ("1"==1) { //Вроде равно
    echo '"1"==1' ;
}

$a=1;

if ($a == 5) {
    echo "a равно 5";
    echo "...";
} elseif ($a == 6) {
    echo "a равно 6";
    echo "!!!";
} else {
    echo "a не равно ни 5 ни 6";
}

if ($a == 5): //Двоеточие
endif;

if ($a == 5) {
}

echo "<h3>Переключатели</h3>";

echo "<hr>";
$color = 2;
switch ($color) {
    case 1: echo "Зелёный ";
    case 2: echo "Жёлтый ";
    case 3: echo "Красный ";
}

$color = 2;
switch ($color) {
    case 1: echo "Зелёный "; break;
    case 2: echo "Жёлтый "; break;
    case 3: echo "Красный "; break;
    default: echo "Неизвестно"; break; //Прерывается
}

for ($i = 0; $i < 10; $i++){
    if ($i==2) { continue; }
    echo '$i='.$i;
    echo '<br>';
    if ($i==5) { break; }
}

echo "<h3>Мини игра</h3>";
$c=0;
while (true) {
    $r = rand(1,10);
    echo '$r='.$r;
    echo '<br>';
    $c++;
    if ($r < 3) { break;}
}
echo '$c='.$c;

echo "<h3>Массивы</h3>";

$num[]=1;
$num[]=5;
$num[]=10;

var_dump($num);
echo "<br>";
echo $num[1];//5

echo "<br>";
echo count($num);// 3 count($Массив) - Кол-во элеменотов в массиве

$a1 = $num[0]; //1
$a2 = $num[1]; //5
$a3 = $num[2]; //10

list($a1,$a2,$a3) = $num; //В перемещеные а1 а2 а3 положить из массива

$color = array();
$color['red'] = "Красный";
$color['blue'] = "Синий";
$color['F'] = "Фамилия";
$color['Text'] = "Какой-то текст";

extract($color,EXTR_PREFIX_ALL,"var");
echo "<br>";
echo $var_Text;