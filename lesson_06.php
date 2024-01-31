<?php
for ($i=5;$i<=50;$i+=5){
    echo " | ".$i;
}

echo "<hr>";

$S=0;
for ($i=30;$i<=50;$i++){
    $S = $S + $i;
}
echo " | ".$S;

echo "<hr>";

$S=0;
for ($i=5;$i<=50;$i+=5){
    $S = $S + $i;
}
echo " | ".$S;

echo "<hr>";

echo "<h3>Массивы</h3>";
echo "<br>";

$m = array(); 
var_dump($m);
echo "<hr>";

$m[]=100;
$m[]=200;

var_dump($m);
echo "<hr>";

echo $m[1];
echo "<hr>";

$N = array();
var_dump($N);

$N[]=10;

echo "<hr>";
$N=range(10,19);
var_dump($N);
echo "<hr>";

$s=0;
for ($i=1;$i<=1000;$i++) {
    $t=rand(1,6);
    if ($t==3) {
        $s = $s+1;
    }
}
echo $s;
echo "<hr>";
$S=0;
$s=0;
$s1=0;
$s2=0;
$s3=0;
$s4=0;
$s5=0;

for ($i=1;$i<=1000;$i++) {
    $t=rand(1,6);
    if ($t==1) {
        $s = $s+1;
    } elseif ($t==2) {
            $s1 = $s1+1;
    } elseif ($t==3) {
            $s2 = $s2+1;
    } elseif ($t==4) {
            $s3 = $s3+1;
    } elseif ($t==5) {
            $s4 = $s4+1;
    } elseif ($t==6) {
            $s5 = $s5+1;
    }
}
echo $s." | ";
echo $s1." | ";
echo $s2." | ";
echo $s3." | ";
echo $s4." | ";
echo $s5." | ";
$S = $s + $s1 + $s2 + $s3 + $s4 + $s5;
echo "<br>";
echo $S;
