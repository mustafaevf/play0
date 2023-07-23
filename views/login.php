<?php top('Авторизация') ?>

<div class="content">
    
    <div class="form">
        <p class="small-title">Авторизация</p>
        <div class="input">
            <input type="text" id="input-login" placeholder="Логин">
        </div>
        <div class="input">
            <input type="password" id="input-password" placeholder="Пароль">
        </div>
        <div class="form-inline">
            <button onclick="login()">Войти в аккаунт</button>
            <a href="/register" class="button grey">Регистрация</a>
        </div>
        <div class="error" style="display: none">
            Ошибка: 
        </div>
    </div>
</div>


<?php bottom() ?>