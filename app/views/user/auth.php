<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $title = 'Авторизация - omNom.link';
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
    <h3 class="auth__title">Авторизация</h3>
    <div class="auth__form-wrapper">
        <form method="POST">
            <input type="text" name="login" id="login" class="form-control mb-2" placeholder="Введите Ваш логин">

            <input type="password" name="pass" id="pass" class="form-control mb-2" placeholder="Введите Ваш пароль">

            <div class="alert alert-danger mt-2" id="errorBlock"></div>

            <button type="button" id="auth_user" class="btn btn-success mt-3">Авторизоваться</button>
        </form>
    </div>
    <div class="auth__footer">Вы еще не зарегистрированны? <a href="/user/reg">Регистрация</a></div>
</div>


<!-- JS section -->
<script src="/frontend/assets/js/main.js"></script>
<!-- Ajax Регистрация -->
    <script>
        $('#errorBlock').hide();
        $('#auth_user').click(function (){
            var login = $('#login').val();
            var pass = $('#pass').val();
            $.ajax({
                url: '/ajax/auth.php', 
                type: 'POST',
                cache: false,
                data: {'login' :login, 'pass' : pass},
                dataType: 'html',
                success: function(data){        
                    if(data == 'Готово') {
                        $('#auth_user').text('Все готово');
                        $('#errorBlock').hide();
                        document.location.href = '/user';
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
