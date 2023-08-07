<?php 
session_start();
require_once('../../function.php');


if($_SESSION['auth'] != 1) {
    echo 'Ошибка. Войдите в аккаунт!';
    return;
}


$bet = htmlspecialchars(trim($_POST['bet']));
$param = htmlspecialchars(trim($_POST['param']));

?>
