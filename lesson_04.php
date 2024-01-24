<?php
$a1 = 1;
$a50 = 50;
$n = 50;
$b = (($a1 + $a50)/2)*50;
echo $b;
echo "<hr>";
$sum = 0;
for ($i=1;$i<=20;$i++) {
    $sum=$sum + $i * $i;
}
echo $sum;
echo "<hr>";
for ($i=1;$i<=500;$i++) {
    if ($i%7==0) {
        echo $i."<br>";
    }
}
echo "<hr>";
$a=rand(1,20);
$b=rand(1,20);

 if ($a>$b) {
    echo $a;
 } else {
    echo $b;
 }
 echo "<hr>";
$x = 2;
$y = 3;
for ($x = 1;$x <= 9;$x++) {
    for ($y = 1;$y <= 9;$y++) {
    echo "$x * $y = ".$x*$y."<br>"; }
}