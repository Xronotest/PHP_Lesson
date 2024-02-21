<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
</head>
<body>
    <?php
    $basket = array();
        if (isset($_SESSION['basket'])) {
            $basket = $_SESSION['basket'];
        }

        $count = 0;
        if (isset($_GET['count'])) {
        $count=$_GET['count'];
        }
if ($count>0) {
    $tovar = "";
    if (isset($_GET['tovar'])) {
        $tovar=$_GET['tovar'];
    }

$cost = "";
    if (isset($_GET['cost'])) {
        $cost=$_GET['cost'];
    }

    $basket[] = ["tovar" => $tovar, "cost" => $cost, "count" => $count];
    $_SESSION['basket'] = $basket;
}
    
    foreach ($basket as $tovar) {
        ?>
              <div class="tovar">
                <div class="tovar_name"><?php echo urldecode($tovar['tovar']);?></div>
                <div class="tovar_cost"><?php echo $tovar['cost']; ?></div>
                <div class="tovar_count"><?php echo $tovar['count']; ?></div>
                </div>
                <hr>
              </div>
              <?php
    }
    ?>
    
</body>
</html>