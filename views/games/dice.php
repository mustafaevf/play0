<?php 
require_once('function.php');
$url = substr($_SERVER['REQUEST_URI'], 1);
$page = explode('/', $url);
$game_id = $page[1];

?>
<? top(getGameById($game_id)['title']) ?>

<div class="games" style='text-align: center;'>
    <!-- <div class="games-block"> -->
        <h1 class="title" style=""><?php echo getGameById($game_id)['title'] ?></h1>
        <p class="subtitle" style="margin-top: 10px; margin-bottom: 1rem;">Игра в кубики</p>
        <div class="game-wrapper">
            <div class="left-wrapper">
                <div class="input"><input type="number" placeholder="Ставка"></div>
                <div class="buttons">
                    <button>> 6</button>
                    <button>= 6</button>
                    <button>< 6</button>
                </div>
                <div class="error" style="display: none;"></div>
            </div>
            <div class="right-wrapper">
                <div class="dices">
                    <div class="dice-1"><img src="/public/images/dices/black/6.png" alt=""></div>
                    <div class="dice-2"><img src="/public/images/dices/black/6.png" alt=""></div>
                </div>
            </div>
        </div>
        
    
    <?php 
        if($_SESSION['auth'] == 1) {
            

        } else {
            echo '<a href="/login" style="width:300px; margin-top: 2rem;">Войдите в аккаунт</a>';
        }

    ?>
    <!-- </div> -->
</div>

<? bottom() ?>