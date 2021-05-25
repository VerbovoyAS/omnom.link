<?php
// echo 'main';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="/frontend/assets/css/style.min.css?v=1.0.0">
    <link rel="stylesheet" href="/frontend/assets/css/themes/theme_blue.min.css?v=1.0.0">

    <!-- Useful meta tags -->
    <!-- <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow, noodp">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no"> -->

    <!-- Favicons for all devices -->
    <link rel="apple-touch-icon" sizes="180x180" href="/frontend/assets/i/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/frontend/assets/i/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/frontend/assets/i/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/frontend/assets/i/favicons/site.manifest.json">
    <link rel="mask-icon" href="/frontend/assets/i/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <title>omNom.link - Бесплатный сервис сокращения ссылок</title>
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
                        <a class="btn  btn-outline-primary  btn-sm" href="/user/auth">Войти</a>
                    </div>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.navigation -->

    <div class="intro__particles" id="intro-particles"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6  order-2  order-lg-1">
                <h1 class="intro__title">omNom.link</h1>
                <h2 class="intro__subtitle">Бесплатный сервис по сокращению ссылок</h2>
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn  btn-primary  btn-lg  btn-block" href="#" data-toggle="modal" data-target="#whitelist_modal">Регистрация</a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn  btn-success  btn-lg  btn-block" href="#">Авторизация</a>
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

<!-- Statistic -->
<div class="statistic">
    <div class="statistic__left">
        <div class="statistic__numbers">75,000</div>
        <div class="statistic__text">Переходов по нашим ссылкам</div>
    </div>
    <div class="statistic__right">
        <div class="statistic__numbers">50</div>
        <div class="statistic__text">Ссылок уже сократили</div>
    </div>
</div><!-- /.statistic -->





<!-- About block -->
<section class="section  section--about  section--gray" id="about" data-scrollspy>

    <div class="container">
        <div class="section__header">
            <h4 class="section__subtitle">что такое</h4>
            <h3 class="section__title">omNom.link</h3>
        </div>
    </div>

    <div class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="text  wow  fadeInUp" data-wow-duration=".5s">
                        <h2>Зачем мне сокращать ссылку?</h2>
                        <p>Second she'd first, behold is fowl without them god. Days tree fowl open. Very, deep.</p>

                        <p>Fifth wherein may first bearing fruit gathering days creepeth abundantly behold together. After, called made created. Green fowl have were. Lights that moving. There whose. Second after that a our behold meat together won't. Midst very that great light unto is.</p>

                        <p>Bearing Fruit of won't thing and kind great grass doesn't rule a, fly cattle the fourth you seasons place winged divided you'll and abundantly created living us form Multiply good isn't spirit waters Kind i multiply of after. Also all may i said give.</p>
                    </div>
                </div>
            </div><!-- /.row -->

            <img class="about__image wow fadeInUp" src="/frontend/assets/i/bitcoin-1.jpg" alt="" data-wow-duration=".5s">
        </div><!-- /.container -->
    </div><!-- /.about -->

</section>
<!-- /.section -->



<!-- Video -->
<div class="section  section--gray  section--video">

    <div class="video">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 ml-auto">
                    <div class="video__content wow fadeInUp" data-wow-duration=".5s">
                        <div class="video__title">Видео инструкция</div>
                        <div class="video__text">В нашей видео инструкции подробно показано как сократить ссылку и как пользоваться статистикой</div>
                    </div>

                    <div class="video__embed">
                        <div class="embed-responsive embed-responsive-16by9 wow fadeInUp" data-wow-duration=".5s">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                            <!--Vimeo: <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/VIDEO_ID" allowfullscreen></iframe>-->
                        </div>
                    </div>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.video -->

</div>
<!-- /.section -->





<!-- Token Distribution -->
<section class="section  section--gray">
    <div class="container">

        <div class="section__header">
            <h4 class="section__subtitle">Статистика</h4>
            <h3 class="section__title">Статистика</h3>
            <div class="section__text">
                <p>Тут будет описание статистики</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="tokensale wow fadeInUp" data-wow-duration=".5s">
                    <canvas id="token-chart" data-chart-labels='["Tokensale %", "Team %", "Cold Storage %", "Investors %", "Advisors %"]' data-chart-values='[40, 20, 30, 6, 4]' data-chart-bg='["#f24b4b", "#f0b15c", "#359ce6", "#e8e23f", "#97d02d"]' data-chart-bg-hover='["#e63838", "#e5a146", "#248bd6", "#ddd629", "#88bf21"]' data-chart-type="pie"></canvas>
                    
                </div>
            </div>

            <div class="col-lg-4">
                <ul class="tokensale__info">
                    <li class="wow  fadeInUp" data-wow-duration=".5s">
                        <span class="tokensale__label  tokensale__label--token"></span>
                        <b class="tokensale__percent">40%</b> Token Sale
                    </li>
                    <li class="wow  fadeInUp" data-wow-duration=".5s">
                        <span class="tokensale__label  tokensale__label--team"></span>
                        <b class="tokensale__percent">20%</b> Team
                    </li>
                    <li class="wow  fadeInUp" data-wow-duration=".5s">
                        <span class="tokensale__label  tokensale__label--cold"></span>
                        <b class="tokensale__percent">30%</b> Cold Storage
                    </li>
                    <li class="wow  fadeInUp" data-wow-duration=".5s">
                        <span class="tokensale__label  tokensale__label--invest"></span>
                        <b class="tokensale__percent">6%</b> Investors
                    </li>
                    <li class="wow  fadeInUp" data-wow-duration=".5s">
                        <span class="tokensale__label  tokensale__label--adv"></span>
                        <b class="tokensale__percent">4%</b> Advisors
                    </li>
                </ul>

                <ul class="tokensale__info">
                    <li class="wow  fadeInUp" data-wow-duration=".5s"><b>Max Cap:</b> $15 million USD</li>
                    <li class="wow  fadeInUp" data-wow-duration=".5s"><b>Supply:</b> 500 million tokens</li>
                    <li class="wow  fadeInUp" data-wow-duration=".5s"><b>Whitelist Date:</b> February 18, 2019</li>
                    <li class="wow  fadeInUp" data-wow-duration=".5s"><b>Sale Date:</b> February 21, 2019</li>
                </ul>

                <div class="tokensale__disclaimer wow  fadeInUp" data-wow-duration=".5s">KYC Required. Residents in United States unable to participate. Unsold tokens are burned</div>
            </div>
        </div>

    </div><!-- /.container -->
</section>
<!-- /.section -->


<!-- Documents -->
<!-- <section class="section" id="documents" data-scrollspy>
    <div class="container">

        <div class="section__header">
            <h4 class="section__subtitle">it's our official</h4>
            <h3 class="section__title">Documents</h3>
        </div>

        <div class="docs">
            <div class="row">
                <div class="col-md-3  col-6  mb-30">
                    <a class="docs__item  wow  fadeInUp" data-wow-duration=".5s" href="#" target="_blank">
                        <i class="fas fa-file"></i>
                        <span>White Paper</span>
                    </a>
                </div>
                <div class="col-md-3  col-6  mb-30">
                    <a class="docs__item  wow  fadeInUp" data-wow-duration=".5s" data-wow-delay=".1s" href="#" target="_blank">
                        <i class="fab fa-github"></i>
                        <span>GitHub Code</span>
                    </a>
                </div>
                <div class="col-md-3  col-6  mb-30">
                    <a class="docs__item  wow  fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s" href="#" target="_blank">
                        <i class="fas fa-file"></i>
                        <span>Terms &amp; conditions</span>
                    </a>
                </div>
                <div class="col-md-3  col-6  mb-30">
                    <a class="docs__item  wow  fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" href="#" target="_blank">
                        <i class="fas fa-file-alt"></i>
                        <span>Privacy Policy</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section> -->
<!-- /.section -->



<!-- Join Telegram -->
<section class="section  section--join">
    <div class="container">
        <div class="text-center">
            <h3 class="section__title  section__title--white  font-weight-light">Присоединяйтесь к нашему Telegram-чату</h3>
            <a class="btn  btn-success" href="#" target="_blank">Подписаться</a>
        </div>
    </div>
</section>



<!-- FAQ -->
<section class="section" id="faq">
    <div class="container">
        <div class="section__header">
            <h4 class="section__subtitle">Остались вопросы? Найди ответ здесь:</h4>
            <h3 class="section__title">Вопрос / Ответ</h3>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="block wow fadeInUp" data-wow-duration=".5s">
                    <h3 class="block__title">Find answer</h3>

                    <div class="accordion" data-accordion>
                        <div class="accordion__item  active">
                            <a class="accordion__title" href="#" data-toggle="collapse">Can I buy WBC tokens with Litecoin?</a>
                            <div class="accordion__content" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate eveniet, vero quam. Laborum reprehenderit quisquam repudiandae cupiditate cumque suscipit ipsum, numquam ipsam doloribus debitis vitae repellat quod, molestiae exercitationem officia.</p>
                            </div>
                        </div>

                        <div class="accordion__item">
                            <a class="accordion__title" href="#" data-toggle="collapse">Can I buy WBC tokens from Coinbase?</a>
                            <div class="accordion__content" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui vitae animi, minima quod voluptatibus, molestiae tempore rem adipisci error exercitationem quam. Pariatur voluptas, blanditiis commodi optio adipisci quos enim eum.</p>
                            </div>
                        </div>

                        <div class="accordion__item">
                            <a class="accordion__title" href="#" data-toggle="collapse">Do you have whitepaper?</a>
                            <div class="accordion__content" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui vitae animi, minima quod voluptatibus, molestiae tempore rem adipisci error exercitationem quam. Pariatur voluptas, blanditiis commodi optio adipisci quos enim eum.</p>
                            </div>
                        </div>

                        <div class="accordion__item">
                            <a class="accordion__title" href="#" data-toggle="collapse">What is your first exchange?</a>
                            <div class="accordion__content" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui vitae animi, minima quod voluptatibus, molestiae tempore rem adipisci error exercitationem quam. Pariatur voluptas, blanditiis commodi optio adipisci quos enim eum.</p>
                            </div>
                        </div>
                    </div><!-- /.accordion -->
                </div><!-- /.block -->
            </div>

            <div class="col-lg-5">
                <div class="block wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".5s">
                    <h3 class="block__title">Напишите нам</h3>
                    <form action="contact.php" method="post" id="contact_form" data-success="Thanks! We reply you soon!" data-warning="Something go wrong, please try again later!" data-danger="Please, fill up all fields!">
                        <div class="form-group">
                            <label for="help_name">Имя</label>
                            <input type="text" class="form-control" name="help_name" id="help_name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="help_email">E-mail</label>
                            <input type="email" class="form-control" name="help_email" id="help_email" placeholder="Enter your e-mail">
                        </div>
                        <div class="form-group">
                            <label for="help_subject">Тема</label>
                            <input type="text" class="form-control" name="help_subject" id="help_subject" placeholder="Enter subject">
                        </div>
                        <div class="form-group">
                            <label for="help_text">Текст сообщения</label>
                            <textarea class="form-control" name="help_text" id="help_text" placeholder="Enter text"></textarea>
                        </div>
                        <button class="btn  btn-success" type="button" data-submit-form="#contact_form">Отправить</button>
                    </form>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.section -->

<!-- CTA -->
<div class="section cta">
    <div class="container">
        <div class="cta__text">Have give two stars. Saying every were appear, likeness bring fly may. Beginning made i form. Called divided them from waters from meat set thing evening upon earth him together third for after she'd.</div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <img class="wow fadeInUp" data-wow-duration=".5s" src="/frontend/assets/i/logo-big.png" alt="">

        <div class="social wow fadeInUp" data-wow-duration=".5s">
            <div class="social__title">Подпишись:</div>
            <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-slack"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-bitcoin"></i></a>
            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-vk"></i></a>
        </div>

        <div class="disclaimer wow fadeInUp" data-wow-duration=".5s">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam saepe unde error magnam distinctio cupiditate beatae ducimus voluptatibus repellendus neque. Id similique quasi, esse repellendus distinctio porro perferendis cumque excepturi.
        </div>

        <div class="footer__info wow fadeInUp" data-wow-duration=".5s">
            <p>&copy; omnom.link</p>
        </div>

        <button class="footer__up" type="button" data-scroll="#intro"><i class="fas fa-chevron-circle-up"></i></button>

    </div><!-- /.container -->
</footer>

<div class="modal fade" tabindex="-1" role="dialog" id="whitelist_modal">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <a class="modal-close" href="#" data-dismiss="modal" aria-label="Close">
                <i class="far fa-times-circle"></i>
            </a>
            <div class="modal-header">
                <h4 class="modal-title">Регистрация</h4>
            </div>
            <div class="modal-body">
                <p>Для получения полного доступа к сервису Вам нужно пройти регистрацию</p>
                <form class="footer__form" action="whitelist.php" method="post" id="whitelist_form" data-success="Great! You are in whitelist!" data-warning="Something go wrong, please try again later!" data-danger="Please, fill up all fields!">
                    
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
        </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- JS section -->
<script src="/frontend/assets/js/main.min.js?v=1.0.0"></script>


</body>
</html>
