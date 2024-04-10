<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
</head>
<body>

<?php 

$action ="";
if (isset($_GET['action'])) {
    $action=$_GET['action'];
};
var_dump($_GET);
echo '<hr>';

if ($action=="create_new") {
    $text = "";
    if (isset($_GET['new_do'])) {
        $text=$_GET['new_do'];
    };
    echo 'Добавляем в список новую запись: '.$text;
}

$sql = "INSERT INTO `ToDo` (`id`,`text`,`complete`) VALUES (NULL, ?, '0');";

        $conn = new mysqli("localhost", "root","","ToDo",3306);
        $conn->set_charset("utf8");
        if ($conn->connect_error) {
            die("Ошибка: ".$conn->connect_error);
        }

        $stmt= $conn->prepare($sql);

        $stmt->bind_param("s",$text);
        $stmt->execute();

if ($action=="done") {
    foreach($_GET as $key => $value) {
        $sub_key = substr($key,0,8);
        if ($sub_key=="id_done_") {
            $id = substr($key,8);
            echo "<hr>Выполнено... id=".$id."<br>";

            $sql = "UPDATE `ToDo` SET complete=1 WHERE id=?";

            $conn = new mysqli("localhost", "root","","ToDo",3306);
            $conn->set_charset("utf8");
            if ($conn->connect_error) {
                die("Ошибка: ".$conn->connect_error);
            }
    
            $stmt= $conn->prepare($sql);
    
            $stmt->bind_param("s",$id);
            $stmt->execute();
        }
    }
}

if ($action=="delete") {
    foreach($_GET as $key => $value) {
        $sub_key = substr($key,0,8);
        if ($sub_key=="id_done_") {
            $id = substr($key,8);
            echo "<hr>Удалено... id=".$id."<br>";

            $sql = "DELETE FROM `ToDo` WHERE id=?";

        $conn = new mysqli("localhost", "root","","ToDo",3306);
        $conn->set_charset("utf8");
        if ($conn->connect_error) {
            die("Ошибка: ".$conn->connect_error);
        }

        $stmt= $conn->prepare($sql);

        $stmt->bind_param("s",$id);
        $stmt->execute();
        }
    } 
}
?>
    
    <form>
    <input type="text" name="new_do"> <button type="submit" name="action" value="create_new">Создать новый</button><br />
    <?php
        $sql = "SELECT * FROM ToDo";

        $conn = new mysqli("localhost", "root","","ToDo",3306);
        $conn->set_charset("utf8");
        if ($conn->connect_error) {
            die("Ошибка: ".$conn->connect_error);
        }

        $stmt= $conn->prepare($sql);
    
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result) {
            foreach ($result as $row) {
                if ($row['complete']==1) {
                echo "<li>";
                echo '<input type="checkbox" name="id_done_'.$row['id'].'" value="1">';
                echo '<s>'.$row['text'].'</s>';
                echo "</li>";} 
                else {
                echo "<li>";
                echo '<input type="checkbox" name="id_done_'.$row['id'].'" value="1">';
                echo $row['text'];
                echo "</li>";}
            }
        }
    ?>

    <button type="submit" name="action" value="done">Выполнены</button>
    <button type="submit" name="action" value="delete">Удалить</button>

</form>

</body>
</html>