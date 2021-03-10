<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $title = 'Регистрация - omNom.link';
        require_once 'frontend/head.php';
    ?>
</head>
<body>

<!-- Preloader -->
<div class="preloader" id="preloader">
    <div class="preloader__spin"></div>
</div>
<script>
    window.onload = function () {
        var preloader = document.getElementById("preloader");
        setTimeout(function () {
            preloader.style.opacity = 0;
            document.body.classList.remove("loading");
        }, 500);
        setTimeout(function () {
            preloader.style.display = "none";
        }, 1000);
    }
</script>

<!-- Navigation -->
<div class="navigation" id="navigation">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/">
                    <img src="/frontend/assets/i/logo-long.png" height="30" alt="WebCoin">
                </a>
            </div>
            <div class="col  text-right">
                <div class="navigation__btns">
                    <a class="btn  btn-dark  btn-sm" href="/">Назад на главную</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="auth">
    <h3 class="auth__title">Регистрация</h3>
    <div class="auth__form-wrapper">
    <form method="POST" class="d-flex flex-column">
        
        <input type="text" name="username" id="username" class="form-control mb-2" placeholder="Введите Ваше имя">

        <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Введите Ваш E-mail">

        <input type="text" name="login" id="login" class="form-control mb-2" placeholder="Введите Ваш логин">

        <input type="password" name="pass" id="pass" class="form-control mb-2" placeholder="Введите Ваш пароль">

        <div class="form-group">
            <div class="alert alert-danger mt-2" id="errorBlock" ></div>
        </div>
                                   
    </form>
    
    <button type="button" id="reg_user" class="btn btn-outline-primary btn-lg btn-block">Зарегистрироваться</button> 
    </div>
    <div class="auth__footer">Вы уже зарегистрированны? <a href="/user/auth/">Авторизуйтесь</a></div>
</div>


<!-- JS section -->
<script src="/frontend/assets/js/main.js"></script>
 <!-- Ajax Регистрация -->
<script> 
    $('#errorBlock').hide();
    $('#reg_user').click(function (){
        
        var name = $('#username').val();
        var email = $('#email').val();
        var login = $('#login').val();
        var pass = $('#pass').val();

        $.ajax({
            url: '/ajax/reg.php', 
            type: 'POST',
            cache: false,
            data: {'username' : name, 'login' :login, 'email' : email, 'pass' : pass},
            dataType: 'html',
            success: function(data){        
                if(data == 'Готово') {
                    $('#reg_user').text('Все готово');
                    $('#errorBlock').hide();
                    setTimeout(function () { document.location.href = '/'; }, 2000);
                }
                else {
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                }
            }
        });
    });
</script>
</body>
</html>
