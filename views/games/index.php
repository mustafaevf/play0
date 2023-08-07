<?php 
require_once('function.php');
// $url = substr($_SERVER['REQUEST_URI'], 1);
// $page = explode('/', $url);
// $user_id = $page[1];

// if(getUserById($user_id) == 0) {
//     header('Location: /');
//     return;
// }

?>
<? top('Каталог игр') ?>

<div class="content">
    <div class="profile">
        <p class="small-title" style="margin-top: 20px;">Режимы игры</p>
        <p class="subtitle">Все доступные игры</p>
    </div>
    
</div>
<!-- <div class="games"> -->
    <!-- <div class="games-block"> -->
        <div class="statistic">
            <div class="statistic-block">
                
                <div class="games-wrapper">
                    <?php 
                    $query = "SELECT * FROM games WHERE status = true";
                    $result = mysqli_query($connect, $query);
                    if(!$result) {
                        return;
                    }
                    while($row = mysqli_fetch_array($result)) {
                        echo '  <a href="/game/'.$row['game_id'].'">
                                    <div class="games-info">
                                        <p class="info">'.$row['title'].'</p>
                                    </div>
                                </a>';
                    }
                    ?>
                
                
                </div>
            </div>
        </div>
        
        
    <!-- </div> -->
<!-- </div> -->

<? bottom() ?>