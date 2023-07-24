<?php 
require_once('function.php');
$url = substr($_SERVER['REQUEST_URI'], 1);
$page = explode('/', $url);
$user_id = $page[1];

if(getUserById($user_id) == 0) {
    header('Location: /');
    return;
}

?>
<?php top(getUserById($user_id)['login'].' - профиль') ?>

<div class="content">
    <div class="profile">
        <img class="avatar" src="<?php echo getUserById($user_id)['avatar']?>" alt="<?php echo getUserById($user_id)['login'] ?>">
        <p class="small-title"><?php echo getUserById($user_id)['login'] ?></p>
        <p class="subtitle">Профиль пользователя</p>
    </div>
</div>
<div class="statistic">
    <div class="statistic-block">
        <p class="small-title">Статистика</p>
        <div class="statistic-wrapper">
            <div class="statistic-info">
                <div>
                    <p class="text">Количество игр:</p>
                    <p class="info">90</p>
                </div>
            </div>
            <div class="statistic-info">
                <div>
                    <p class="text">Сделок:</p>
                    <p class="info">90</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
if($_SESSION['user_id'] == $user_id) {
    echo '
<div class="statistic">
    <div class="statistic-block">
        <p class="small-title">Редактирование профиля</p>
        <div class="form">
            <div class="input">
                <input type="password" id="input-old-password" placeholder="Старый пароль">
            </div>
            <div class="input">
                <input type="password" id="input-new-password" placeholder="Новый пароль">
            </div>
            <button onclick="change_password()">Подтвердить</button>
        </div>
        <div class="error" style="display: none"></div>
    </div>
</div>';
}
?>

<?php bottom() ?>

