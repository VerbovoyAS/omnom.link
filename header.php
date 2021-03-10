<?php
?>
<div class="navigation" id="navigation">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-5">
                <button class="burger" type="button" id="nav_toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <img class="navigation__logo" src="/frontend/assets/i/logo-min.png" height="30" alt="">
                <nav class="navigation__menu" id="nav">
                    <a href="#" data-scroll="#intro">Главная</a>
                    <a href="#" data-scroll="#about">О Нас</a>
                    <a href="#" data-scroll="#faq">Контакты</a>
                    
                </nav>
            </div>

            <div class="col-lg-3 col-md-7  text-right">
                <div class="navigation__btns">
                <?php if (isset($_COOKIE['login']) == ''): ?>
                    <a class="btn  btn-outline-primary btn-sm" href="/user/auth">Войти</a>
                <?php elseif($_COOKIE['login'] !== ''): ?>
                    <a class="btn  btn-outline-success btn-sm" href="/user/<?=$_COOKIE['login']?>">Кабинет</a>
                <?php endif; ?> 
                    
                </div>
            </div>

        </div>
    </div>
</div>