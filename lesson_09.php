<?php
echo "<h3>Адресная строка и GET</h3>";
var_dump($_GET);

echo '<hr>';

?>
<form action="" method="GET">
    Число А: <input name="A"><br>
    Имя: <input name="name"><br>
    <input type="submit" value="Отпрвить">
</form>
<?php
if (isset($_GET["A"])) {
echo "A= ".$_GET["A"];
}
?>
<form action="" method="GET">
    Число участников: <input name="N">
    <input type="submit" value="Отпрвить">
</form>
<?php
if (isset($_GET["N"])) {
    echo "N= ". rand(1,$_GET["N"])."<br>";
}
?>
<form action="" method="GET">
    Число 1 <input name="Num1">
    + Число 2 <input name="Num2">
    =<br>
    <input type="submit" value="Отпрвить">
</form>
<?php
if (isset($_GET["Num1"])) {
    if (isset($_GET["Num2"])) {
    echo "Сумма= ". $_GET["Num1"]+$_GET["Num2"]."<br>";
    }
}

echo "<h3>Невидимые данные и POST</h3>";
?>
<form action="" method="POST">
    Логин <input name="login">
    <input type="submit" value="Отпрвить">
</form>
<?php 
session_start();

var_dump($_SESSION);
echo "<hr>";

if (isset($_SESSION['login'])) {
$_SESSION['login'] = $_POST['login'];
}
if (isset($_POST["login"])) {
    echo 'Логин =  '. $_POST['login']."<br>";
}
