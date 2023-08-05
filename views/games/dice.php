<?php 
require_once('function.php');
$url = substr($_SERVER['REQUEST_URI'], 1);
$page = explode('/', $url);
$game_id = $page[1];

?>
<? top(getGameById($game_id)['title']) ?>

<div class="games">
    <div class="games-block">
        <p class="small-title"><?php echo getGameById($game_id)['title'] ?></p>
    
    <?php 
        if($_SESSION['auth'] == 1) {


        } else {
            echo '<a href="/login" style="width:300px; margin-top: 2rem;">Войдите в аккаунт</a>';
        }

    ?>
    </div>
</div>

<? bottom() ?>