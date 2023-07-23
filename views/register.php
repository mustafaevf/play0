<?php top('Регистрация') ?>

<div class="content">
    
    <div class="form">
        <p class="small-title">Регистрация</p>
        <div class="input">
            <input type="text" id="input-login" placeholder="Логин">
        </div>
        <div class="input">
            <input type="password" id="input-register" placeholder="Пароль">
        </div>
        <div class="input">
            <input type="password" id="input-retry-password" placeholder="Пароль еще раз">
        </div>
        <div class="form-inline">
            <button onclick="register()">Создать аккаунт</button>
            <a href="/login" class="button grey">Войти</a>
        </div>
        <div class="error" style="display: none">
            Ошибка: 
        </div>
    </div>
</div>


<?php bottom() ?>