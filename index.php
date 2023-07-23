<?php 
ini_set('display_errors', 1);


$url = substr($_SERVER['REQUEST_URI'], 1);

if($url == '') {
    include "views/index.php";
} elseif ($url == 'login') {
    include "views/".$url;
} elseif ($url == 'register') {
    include "views/".$url;
}


function top($title) {
    echo '<html>
            <head>
                <title>'.$title.'</title>
                <link rel="stylesheet" href="/public/css/style.css">
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
                            <a href="/login" class="button">Авторизация</a>
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