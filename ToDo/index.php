<?php

include("todo_class.php");

$todo = new Todo();



?> <ul> <?php

$list = $todo->select();
if ($list) {
    foreach ($list as $row) {
        ?>
        <li><?=$row["id"]; ?>.  <?=htmlentities($row['text'], ENT_QUOTES, 'UTF-8'); ?> </li>
        <?php

    }
}

?> </ul> <?php 
