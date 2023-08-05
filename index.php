<?php 
session_start();
ini_set('display_errors', 1);
include "function.php";


$url = substr($_SERVER['REQUEST_URI'], 1);


if(sizeof(explode('/', $url)) != 2) {
    if($url == '') {
        include "views/index.php";
    } elseif ($url == 'login') {
        include "views/".$url.".php";
    } elseif ($url == 'register') {
        include "views/".$url.".php";
    } elseif ($url == 'logout') {
        include "views/".$url.".php";
    } elseif($url == 'games') {
        include "views/games/index.php";
    }
} else 
{
    $page = explode('/', $url);
    if($page[0] == 'user') {
        $user_id = $page[1];
        include "views/user/index.php";
    }
    if($page[0] == 'game') {
        $game_id = $page[1];
        $query = "SELECT * FROM games WHERE status = true AND game_id = '$game_id'";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) == 0) {
            echo 'error';
            return;
        }
        else {
            $row = mysqli_fetch_array($result);
            include "views/games/".$row['short'].".php";
        }
    }
}




function top($title) {
    echo '<html>
            <head>
                <title>'.$title.'</title>
                <link rel="stylesheet" href="/public/css/style.css">
                <script src="/public/js/jquery.min.js"></script>
                <script src="/public/js/script.js"></script>
            </head>
            <body>
                <header>
                    <div class="header-content">
                        <div class="header-logo">
                            <a href="/"><img src="/public/images/logo.png" alt="logo"></a>
                        </div>
                        <div class="header-nav">
                            <a href="">Торговая площадка</a>
                            <a href="/games">Игры</a>
                            <a href="">О нас</a>
                            <div class="line"></div>
                            ';
                if($_SESSION['auth'] != 1) {
                    echo '
                            <a href="/login" class="button">Авторизация</a>';
                        
                } else {
                    echo '
                            <a href="/user/'.$_SESSION['user_id'].'">'.getUserById($_SESSION['user_id'])['login'].'</a>
                            <a href="/user/'.$_SESSION['user_id'].'"><img class="avatar" src="'.getUserById($_SESSION['user_id'])['avatar'].'" alt="logo"></a>
                            <a href="/pay/">'.getUserById($_SESSION['user_id'])['balance'].' руб.</a>';
                }
                echo '
                        </div>
                    </div>
                </header>';

}

function bottom() {
    echo '
            </body>

        </html>';
}

?>