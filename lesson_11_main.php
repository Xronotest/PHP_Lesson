<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Купи коня</title>
</head>
<body>
    <h2>Виды товара</h2>
    <ul>
<?php 
foreach ($group as $row_group_name => $row_group_tovar) {
    echo "<li><a href = '?razdel=group&name=".urlencode($row_group_name)."'>" . $row_group_name . "</a></li>";
}

?></ul>
</body>
</html>