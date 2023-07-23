<?php 
    require_once('../function.php');
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));
    $retry_password = htmlspecialchars(trim($_POST['retry_password']));

    if($login == '' || $password == '' || $retry_password == '') 
    {
        echo 'Ошибка: заполните все поля';
        return;
    }
    if($password != $retry_password) {
        echo 'Ошибка: пароли должны совпадать';
        return;
    }
    $result = getUserByLogin($login);
    if($result != 0) {
        echo 'Ошибка: имя пользователя уже занято';
        return;
    }
    if(createUser($login, $password) == 1) {
        echo 'ok';
        return;
    }

?>