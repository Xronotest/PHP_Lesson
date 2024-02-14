<?php
define("LOGIN", "admin");
define("PASSWORD", "123");

session_start();

$admin = false;
if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == 1) {
    $admin =true;
    }
}

if (isset($_GET['logout']) && $_GET['logout']==1) {
    $admin=false;
    $_SESSION['admin'] = false;
}

if (isset($_POST['login']) && $_POST['login']==LOGIN
&& isset ($_POST['password']) && $_POST['password'] ==PASSWORD
) {
    $admin =true;
    $_SESSION['admin'] = true;
    setcookie("last_login",$_POST['login'],time() + 60*60*24*14);
}

if (!$admin) {

    $last_login="";
    if (isset($_COOKIE['last_login'])) {
        $last_login=$_COOKIE['last_login'];
    }
?>
<form action="" method="post"><br />
    Логин: <input name ="login"><br />
    Пароль: <input type ="password" name="password"><br />
    <input type = "submit";>
</form>
<?php
} else {
    ?>
    ВЫ АВТОРИЗОВАННЫ!!!!!<br>
    <a href="?logout=1">Ливнуть</a>
    <?php
}