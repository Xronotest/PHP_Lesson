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

echo "<br>";
$person[]="Булка";
var_dump($person);

echo "<br>";

$person[100]="Олег";
$person["Ключ"]="Значение";

echo "<br>";
var_dump($person);

echo "<hr>";
foreach ($person as $name => $value)  {
    echo "Индекс: {$name} Значение: {$value}<br>";
}
echo "<h3>Условия</h3>";
if (1==1) {//Примерно равно
    echo "1==1";
}

if ("00000001.000000"==1) { //Примерно равно
    echo '"00000001.000000"==1';
}

if (1===1) { //Точно равно
    echo "1===1";
}

echo "<h3>Сложение и вычитание</h3>";
$i = 0;
echo $i; //0
echo "<br>"; // =1
$i=$i+1; // =1
$i++; // $i=2
echo $i; //2
echo "<br>";
$i+=10; //$i = $i+10; //=12
echo $i; //12
echo "<br>";

echo $i++; //12
echo "<br>";
echo $i; //13

echo ++$i; //14
echo "<br>";
echo $i; //14

echo "<br>";
echo $i+=10; //24
echo "<br>";
echo $i; //24

echo "<h3>Циклы</h3>";
// for (Инициализация;Условия;Действия)
for ($counter = 0; $counter < 10; $counter++ )
{
    echo '$counter='.$counter;
    echo'<br>';
}

for (; $counter < 10;)
{
    echo '$counter='.$counter;
    echo'<br>';
    $counter++;
}

$i = 0;
while ($i < 10) {
    echo '$i='.$i;
    echo '<br>';
    $i++;
}
echo '<hr>';
$i = 0;
do {
    echo '$i='.$i;
    echo '<br>';
    $i++;
} while ($i < 10);