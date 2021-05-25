<?php
// echo 'main';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $title = 'omNom.link - Бесплатный сервис сокращения ссылок';
        require_once 'frontend/head.php';
    ?>
</head>
<body class="loading">


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


    <!-- Intro -->
    <div class="intro" id="intro" data-scrollspy>

        <!-- Navigation -->
        <?php require_once 'header.php';?>
        <!-- / END Navigation -->

        <div class="intro__particles" id="intro-particles"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6  order-2  order-lg-1">
                    
                    <img src="/frontend/assets/i/logo-long.png" height="" width="100%" alt="omNom.link">
                    <h2 class="intro__subtitle">Бесплатный сервис по сокращению ссылок</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn  btn-primary  btn-lg  btn-block" href="/user/reg" >Регистрация</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn  btn-success  btn-lg  btn-block" href="/user/auth">Авторизация</a>
                        </div>
                    </div>
                    <div class="social">
                        <div class="social__title">Поддержите проект:</div>
                        <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-slack"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-bitcoin"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-vk"></i></a>
                    </div>
                </div>

                <div class="col-lg-5  ml-auto  order-1  order-lg-2">
                    <div class="intro__info">
                    <h3 class="block__title">Сократить ссылку</h3>
                    <p>Сократить ссылку БЕЗ регистрации</p>
                        <form action="contact.php" method="post" id="contact_form">
                            <div class="form-group">
                                <label for="help_name">Ссылка</label>
                                <input type="text" class="form-control" name="help_name" id="fast_link" placeholder="Введите или скопируйте вашу ссылку">
                            </div>
                            
                            <button class="btn  btn-success" type="button" >Сократить</button>
                        </form>
                    </div>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- /.intro -->
    
    <?php require_once '/home-content.php';?>    

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
                        setTimeout(function () { document.location.href = '/user/'; }, 2000);
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
