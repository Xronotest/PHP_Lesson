<?php

$students = array();

//CT1----
$st = array();
$st['ФИО']="И.И.Иванов";
$st['Дата рождения']=2005;

var_dump($st);
echo "<hr>";

$students[] = $st;
var_dump($students);
echo "<hr>";

//CT2----
$st = array();
$st['ФИО']="А.А.Кочнев";
$st['Дата рождения']=2008;
var_dump($st);
echo "<hr>";

$students[] = $st;
var_dump($students);
echo "<hr>";

//CT3----
$st = array();
$st['ФИО']="X.X.Xrono";
$st['Дата рождения']=2000;
var_dump($st);
echo "<hr>";

$students[] = $st;
var_dump($students);
echo "<hr>";

//-------

//Для каждого
foreach ($students as $s) {
    /*var_dump($s);
    echo "<hr>";*/
    echo $s["ФИО"].' Год рождния :'.$s["Дата рождения"].'<br>';
}
?>
<style>
    .info {
        width: 200px;
        border: 1px solid;
        padding: 5px;
        margin: 5px;
    }
    .fio {
        font-family: sans-serif;
        font-weight: bolder;
        text-align: center;
    }
</style>

<?php
foreach ($students as $s) {
include("lesson_07_001.php");
}
?>