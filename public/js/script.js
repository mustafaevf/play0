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
            } else {
                window.location.href = '/';
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
            } else {
                window.location.href = '/login';
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}
function change_password() {
    const old_password = $('#input-old-password').val();
    const new_password = $('#input-new-password').val();
    const data = {
        'old_password': old_password,
        'new_password': new_password
    }
    $.ajax({
        url: '/core/user/change-password.php', 
        type: 'POST',
        data: data,
        success: function(response) {
            console.log(response)
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