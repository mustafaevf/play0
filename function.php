<?php

function getUserById($user_id) {
    $user = 'root';
    $password = '';
    $host = 'localhost';
    $database = 'play0';
    $connect = mysqli_connect($host, $user, $password, $database);
    $query = "SELECT  * FROM users WHERE user_id = '$user_id'";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) == 0) {
        return 0;
    }
    $row = mysqli_fetch_array($result);
    return $row;
}

function getUserByLogin($login) {
    $user = 'root';
    $password = '';
    $host = 'localhost';
    $database = 'play0';
    $connect = mysqli_connect($host, $user, $password, $database);
    $query = "SELECT  * FROM users WHERE login = '$login'";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) == 0) {
        return 0;
    }
    $row = mysqli_fetch_array($result);
    return $row;
}

function getUsers() {
    $user = 'root';
    $password = '';
    $host = 'localhost';
    $database = 'play0';
    $connect = mysqli_connect($host, $user, $password, $database);
    $query = "SELECT  * FROM users";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) == 0) {
        return 0;
    }
    $row = mysqli_fetch_array($result);
    return $row;
}

function createUser($login, $user_password) {
    $user = 'root';
    $password = '';
    $host = 'localhost';
    $database = 'play0';
    $user_password = hash('sha256', htmlspecialchars($user_password));
    $connect = mysqli_connect($host, $user, $password, $database);
    $query = "INSERT INTO users (login, password, balance) VALUES('$login', '$user_password', 0)";
    $result = mysqli_query($connect, $query);
    if($result) {
        return 1;
    }
}