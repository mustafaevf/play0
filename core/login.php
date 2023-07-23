<?php 
    session_start();
    require_once('../function.php');
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));

    if($login == '' || $password == '') 
    {
        echo 'Ошибка: заполните все поля';
        return;
    }
    $result = getUserByLogin($login);
    if($result == 0) {
        echo 'Ошибка: пользователь не найден';
        return;
    }
    if(hash('sha256', $password) != $result['password']) {
        echo 'Ошибка: пароли не совпадают';
        return;
    }
    echo 'ok';
    $_SESSION['auth'] = 1;
    $_SESSION['user_id'] = $result['user_id'];
    return;
?>