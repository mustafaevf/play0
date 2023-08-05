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

<div class="games">
    <!-- <div class="games-block"> -->
        <p class="small-title">Режимы игры</p>
        <div class="games-wrapper">
            <?php 
            $query = "SELECT * FROM games WHERE status = true";
            $result = mysqli_query($connect, $query);
            if(!$result) {
                return;
            }
            while($row = mysqli_fetch_array($result)) {
                echo '  <a href="/game/'.$row['game_id'].'">
                            <div class="games-info" style="background-image: url(/public/images/'.$row['short'].'.png);">
                                <p class="info">'.$row['title'].'</p>
                            </div>
                        </a>';
            }
            ?>
        
           
        </div>
    <!-- </div> -->
</div>

<? bottom() ?>