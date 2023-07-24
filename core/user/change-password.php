<?php
session_start();
require_once('../../function.php');
$old_password = htmlspecialchars(trim($_POST['old_password']));
$new_password = htmlspecialchars(trim($_POST['new_password']));

if($old_password == '' || $new_password == '') {
    echo 'Ошибка: заполните все поля';
    return;
}
if($_SESSION['auth'] != 1) {
    echo 'Ошибка: войдите в аккаунт';
    return;
}
$user_id = $_SESSION['user_id'];

if(getUserById($user_id)['password'] != hash('sha256', $old_password)) {
    echo 'Ошибка: пароли не совпадают';
    return;
}

if(changePassword($user_id, $new_password)) {
    echo 'ok';
    return;
}


?>