<?php
    //DELETE LINK               
    $_db = DB::getInstanse();
    if(isset($_GET['action']) and $_GET['action'] == "delete"){
        $id = $_GET['id'];
        $del_sql = "DELETE FROM `link` WHERE id = '$id' ";
        $del_query = $_db->prepare($del_sql);
        $del_query->execute();
        
        echo "<script>self.location='/';</script>";
        
        exit();
        
    }
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
                <div class="col d-flex  justify-content-center">
                    <img src="/frontend/assets/i/logo-long.png" class="d-block d-md-none" width="" height="70" alt="omNom.link">
                    <img src="/frontend/assets/i/logo-long.png" class="d-none d-md-block" width="" height="100" alt="omNom.link">
                </div>
            </div>
            
            <div class="row">

                <div class="col-lg-6  order-1  order-lg-1 d-flex align-items-center flex-column">
                    <div class="intro__info w-100">
                        <h3 class="block__title">Сократить ссылку</h3>
                        <form method="POST">
                        
                            <input type="text" name="link" id="link" class="form-control mb-4" placeholder="Введите Вашу ссылку">

                            <input type="text" name="mylink" id="mylink" class="form-control mb-4" placeholder="Короткое название">

                            <div class="alert alert-danger mt-1 p-2" id="errorLink" ></div>

                            <button type="button" id="add_link" class="btn btn-success ">Сократить</button>
                            
                        </form>
                        <p class="mt-3" >Придумайте название ссылки.</p>
                    </div>
                    
                </div>

                <div class="col-lg-6  order-2  order-lg-2 d-flex align-items-center">
                    <div id="block" class="intro__info w-100">
                        <h3 class="block__title">Недавние ссылки</h3>
                        <?php if(isset($data[0]) != "" ):?>
                            <div  class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                    <!-- <tr>
                                        <th scope="col">Ссылка</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr> -->
                                    <?php echo $data;?>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                </table>
                            </div>
                            <p>Просмотреть все ссылки вы можете в <a href="/user/<?=$_COOKIE['login']?>">Личном кабинете</a></p>
                        <?php else:?>
                            <h3 class="text-center">Создайте свою первую ссылку</h3>
                        <?php endif;?>
                        
                    </div>
                </div><!-- /.col -->

            </div>
            <div class="row">
                <div class="col">
                    <div class="social">
                        <div class="social__title">Поддержите проект:</div>
                        <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-bitcoin"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div>
    <!-- /.intro -->

    <?php require_once 'home-content.php';?>    
    
    <!-- Ajax  -->
    <!-- ADD NEW LINK  -->
    <script>

        $('#errorLink').hide();
        $('#add_link').click(function (){
            var login = '<?=$_COOKIE['login'];?>';
            var link = $('#link').val();
            var mylink = $('#mylink').val();
            
            $.ajax({
                url: 'ajax/addLink.php', 
                type: 'POST',
                cache: false,
                data: {'login' : login, 'link' : link, 'mylink' : mylink},
                dataType: 'html',
                success: function(data){        
                    if(data == 'Готово') {
                        $('#add_link').text('Все готово');
                        $('#errorLink').hide();
                        $("#block").load("/ #block > *");
                        setTimeout(function () { 
                            $('#add_link').text('Сократить');
                            $('#link').val("");
                            $('#mylink').val("");
                        }, 2000);
                    }
                    else {
                        $('#errorLink').show();
                        $('#errorLink').text(data);
                    }
                }
            });
        });
    </script>

</body>
</html>
