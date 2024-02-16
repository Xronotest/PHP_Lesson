<?php

$group = array();

$tovar = array();
$tovar["name"] = "Тыква";
$tovar["cost"] = 300;

$group["Овощи"][] = $tovar;

$group["Овощи"][] = ["name" => "Костя","cost" => 10];
$group["Овощи"][] = ["name" => "Целый Костя","cost" => 2500];

$group["Фрукты"][] = ["name" => "Никитос","cost" => 25];
$group["Фрукты"][] = ["name" => "Ананас","cost" => 200];

$group["Хлебобублочное"][] = ["name" => "Хлеб","cost" => -0.1];