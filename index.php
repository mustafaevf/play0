<?php 
session_start();
ini_set('display_errors', 1);
include "function.php";


$url = substr($_SERVER['REQUEST_URI'], 1);

if($url == '') {
    include "views/index.php";
} elseif ($url == 'login') {
    include "views/".$url.".php";
} elseif ($url == 'register') {
    include "views/".$url.".php";
} elseif ($url == 'logout') {
    include "views/".$url.".php";
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
                            <img src="https://codechange.cc/assets/image/logo.svg" alt="logo">
                        </div>
                        <div class="header-nav">
                            <a href="">Торговая площадка</a>
                            <a href="">Игры</a>
                            <a href="">О нас</a>
                            <div class="line"></div>
                            ';
                if($_SESSION['auth'] != 1) {
                    echo '
                            <a href="/login" class="button">Авторизация</a>';
                        
                } else {
                    echo '
                            <a href="/user/'.$_SESSION['user_id'].'">'.getUserById($_SESSION['user_id'])['login'].'</a>';
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