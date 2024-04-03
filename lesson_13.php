<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

Меню:
<ul>
    <li><a href="?r=main">Главная</a></li>
    <li><a href="?r=country">Страны</a></li>
</ul>
    
<?php
var_dump($_GET);

$r="";
if (isset($_GET["r"])) {
    $r=$_GET["r"];
}

if ($r=="country") {
    $sql = "SELECT code,name FROM `country` LIMIT ?,10";

    $conn = new mysqli("localhost", "root","","world",3306);
    if ($conn->connect_error) {
        die("Ошибка: ".$conn->connect_error);
    }

    $stmt= $conn->prepare($sql);

    $offset=0;
if (isset($_GET["offset"])) {
    $offset=$_GET["offset"];
}

    $stmt->bind_param("i",$offset);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<hr>";
    if ($result) {
        foreach ($result as $row) {
            echo "<a href ='?r=city&code=".$row['code']."'>".$row['name'].'<?a><br>';
        }
    }
    echo "<br>";
    echo "<a href='?r=country&offset=".($offset-10)."'>Назад</a> ";
    echo "<a href='?r=country&offset=".($offset+10)."'>Вперёд</a> ";
    $conn->close();
}

if ($r=="city") {
    $sql = "SELECT id,name FROM city WHERE country_code = ?";

    $conn = new mysqli("localhost", "root","","world",3306);
    if ($conn->connect_error) {
        die("Ошибка: ".$conn->connect_error);
    }
    $stmt= $conn->prepare($sql);

    $code="";
if (isset($_GET["code"])) {
    $code=$_GET["code"];
}

    $stmt->bind_param("s",$code);
    $stmt->execute();
    $result = $stmt->get_result();

    var_dump($result);
    if ($result) {
        foreach ($result as $row) {
            echo $row['id'].'$nbsp;'.$row['name'].'<br>';
        }
    }
    $conn->close();
}
?>
</body>
</html>