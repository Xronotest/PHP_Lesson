<?php
include ("lesson_11_tovar.php");

$razdel = '';
if (isset($_GET['razdel'])) {
    $razdel=$_GET['razdel'];
}

if ($razdel=='' || $razdel =='main') {
    include ("lesson_11_main.php");
}

if ($razdel=='group') {
    include ("lesson_11_group.php");
}
?>
