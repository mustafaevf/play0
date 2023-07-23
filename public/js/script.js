function login() {
    const login = $('#input-login').val();
    const password = $('#input-password').val();
    const data = {
        'login': login,
        'password': password
    }
    $.ajax({
        url: '/core/login.php', 
        type: 'POST',
        data: data,
        success: function(response) {
            if(response !== 'ok') {
                $('.error').fadeIn();
                $('.error').html(response)
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}

function register() {
    const login = $('#input-login').val();
    const password = $('#input-password').val();
    const retry_password = $('#input-retry-password').val(); 
    const data = {
        'login': login,
        'password': password,
        'retry_password': retry_password
    }
    $.ajax({
        url: '/core/register.php', 
        type: 'POST',
        data: data,
        success: function(response) {
            if(response !== 'ok') {
                $('.error').fadeIn();
                $('.error').html(response)
                // setTimeout($('.error').fadeOut(), 10000000000)
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}