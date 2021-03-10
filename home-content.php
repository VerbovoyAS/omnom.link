<?php
require_once 'app/lib/DB.php';
$_db = DB::getInstanse();
$sql = 'SELECT * FROM `all_stat` WHERE id = 1';
$query = $_db->prepare($sql);
$query->execute();
$stat = $query->fetchAll(PDO::FETCH_ASSOC); 
?>
    <!-- Statistic -->  
    <div class="statistic">
        <div class="statistic__left">
            <div class="statistic__numbers"><?=$stat[0]['all_jump_link']?></div>
            <div class="statistic__text">Переходов по нашим ссылкам</div>
        </div>
        <div class="statistic__right">
            <div class="statistic__numbers"><?=$stat[0]['all_get_link']?></div>
            <div class="statistic__text">Ссылок уже сократили</div>
        </div>
    </div>
    <!-- /.statistic -->

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
                
                            <p>Короткий url проще запомнить или продиктовать без потери меток</p>
                            <p>Короткий адрес эстетичней выглядит в текстах и сообщениях онлайн. Экономия длины сообщения — плюс таких url-ов.</p>
                            <p>Удубная отправка сообщений офлайн. Короткий URL проще набрать без ошибок, и выгдядеть он будет на много эстетичнее.</p>
                            <p>Удобно, когда необходимо скрыть партнерский идентефикатор, это если вы участвуете в реферальных программах разного вида</p>
                        </div>
                    </div>
                </div><!-- /.row -->

                <img class="about__image wow fadeInUp" src="/frontend/assets/i/img-link.png" alt="" data-wow-duration=".5s">
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
                                <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe> -->
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
    <!-- <section class="section  section--gray">
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

        </div>
    </section> -->
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
    <!-- <section class="section  section--join">
        <div class="container">
            <div class="text-center">
                <h3 class="section__title  section__title--white  font-weight-light">Присоединяйтесь к нашему Telegram-чату</h3>
                <a class="btn  btn-success" href="#" target="_blank">Подписаться</a>
            </div>
        </div>
    </section> -->

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
                        <h3 class="block__title">Найди ответ здесь:</h3>

                        <div class="accordion" data-accordion>
                            <div class="accordion__item  active">
                                <a class="accordion__title" href="#" data-toggle="collapse">Сократить ссылку - это бесплатно?</a>
                                <div class="accordion__content" role="tabpanel">
                                    <p>ДА! Сервис полностью бесплатный! </p>
                                </div>
                            </div>

                            <div class="accordion__item">
                                <a class="accordion__title" href="#" data-toggle="collapse">Я могу посмотреть статистику по ссылке?</a>
                                <div class="accordion__content" role="tabpanel">
                                    <p>Да, вы можете посмотреть статистику по ссылке, но только если вы зарегистрируетесь. Если вы создали ссылку без регистрации, то статистика вам доступна не будет. </p>
                                </div>
                            </div>

                            <div class="accordion__item">
                                <a class="accordion__title" href="#" data-toggle="collapse">Будет ли встроенна реклама в мою ссылку?</a>
                                <div class="accordion__content" role="tabpanel">
                                    <p>НЕТ! Мы не встраиваем рекламу в ссылки которые вы сокращаете.</p>
                                </div>
                            </div>

                            <div class="accordion__item">
                                <a class="accordion__title" href="#" data-toggle="collapse">Как долго моя ссылка будет рабочей?</a>
                                <div class="accordion__content" role="tabpanel">
                                    <p>Срок жизни ссылки ограничен только если вы не зарегистрированны, в этом случае ссылка будет активна 30 дней. У зарегистрированных пользователей, ссылка активна пожизненно. </p>
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
                                <input type="text" class="form-control" name="help_name" id="help_name" placeholder="Введите Ваше имя">
                            </div>
                            <div class="form-group">
                                <label for="help_email">E-mail</label>
                                <input type="email" class="form-control" name="help_email" id="help_email" placeholder="Введите Ваш e-mail">
                            </div>
                            <div class="form-group">
                                <label for="help_subject">Тема</label>
                                <input type="text" class="form-control" name="help_subject" id="help_subject" placeholder="Введите тему письма">
                            </div>
                            <div class="form-group">
                                <label for="help_text">Текст сообщения</label>
                                <textarea class="form-control" name="help_text" id="help_text" placeholder="Введите Ваш текст"></textarea>
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
            <div class="cta__text">
                Сократите ссылку и получите полную статистику по переходам.
            </div>
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
                Бесплатный сервис по сокращению ссылок.
            </div>

            <div class="footer__info wow fadeInUp" data-wow-duration=".5s">
                <p>&copy; omnom.link</p>
            </div>

            <button class="footer__up" type="button" data-scroll="#intro"><i class="fas fa-chevron-circle-up"></i></button>

        </div><!-- /.container -->
    </footer>


    <!-- JS section -->
    <script src="/frontend/assets/js/main.min.js?v=1.0.0"></script>