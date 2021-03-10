<?php 
    //DELETE LINK 
    $_db = DB::getInstanse();
    if(isset($_GET['action']) and $_GET['action'] == "delete"){
        $id = $_GET['id'];
        $del_sql = "DELETE FROM `link` WHERE id = '$id' ";
        $del_query = $_db->prepare($del_sql);
        $del_query->execute();
        $login = $_COOKIE["login"];
        echo "<script>self.location='/user/$login';</script>";
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
<body>


<div class="platform">

    <!-- Header -->
    <div class="platform__header">
        <div class="container">
            <div class="row">
    
                <div class="col-sm-6 col-4">
                    <a class="d-block d-md-none mt-1" href="user/Login">
                        <img src="/frontend/assets/i/logo-white-min.png" height="30" alt="omNom.link">
                    </a>
                </div>
    
                <div class="col-sm-6 col-8">
                    <div class="platform__header-nav">
                        <a href="#" data-toggle="modal" data-target="#logout_modal">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                        <a class="avatar" href="platform-profile.html">
                            <img src="/frontend/assets/i/avatar.png" width="60" height="60" alt="<?=$_COOKIE['login']?>">
                        </a>
                    </div>
                </div>
    
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.platform__header -->

    <!-- Sidebar -->
    <div class="platform__sidebar">
        <div class="platform__navbar-inner">
    
            <div class="platform__navbar-top">
                <a class="platform__navbar-logo" href="/">
                    <img src="/frontend/assets/i/logo-white-long.png" height="40" width="" class="" alt="omNom.link">
                </a>
                <a class="platform__navbar-profile" href="platform-profile.html">
                    <img src="/frontend/assets/i/avatar.png" width="30" height="30" alt="John Doe">
                    <span><?=$_COOKIE['login']?></span>
                </a>
            </div>
    
            <ul class="platform__nav">
                <li>
                    <a class="platform__nav-link  active" href="/user">
                        <span>Панель управления</span>
                        <i class="fas fa-tachometer-alt"></i>
                    </a>
                </li>
                <!-- <li>
                    <a class="platform__nav-link" href="/">
                        <span>Tokensale</span>
                        <i class="fas fa-coins"></i>
                    </a>
                </li>
                <li>
                    <a class="platform__nav-link" href="/">
                        <span>Announcements</span>
                        <i class="fas fa-newspaper"></i>
                    </a>
                </li>
                <li>
                    <a class="platform__nav-link" href="/">
                        <span>Bounty</span>
                        <i class="fas fa-gift"></i>
                    </a>
                </li>
                <li>
                    <a class="platform__nav-link" href="/">
                        <span>Airdrop</span>
                        <i class="fas fa-fighter-jet"></i>
                    </a>
                </li> -->
                
            </ul>
    
        </div>
    </div>



    <!-- Content -->
    <div class="platform__inner">
        <div class="platform__subheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-10">
                        <h1 class="platform__title">Панель управления</h1>
                    </div>
                    <div class="col-md-6 col-2 text-right d-none d-md-block">
                        <a class="btn  btn-success  btn-sm " href="/"><i class="fab fa-bitcoin"></i> Помочь проекту </a>
                    </div>
                    <div class="col-md-6 col-2 d-block d-md-none pl-0">
                        <a class="btn  btn-success  btn-sm d-block d-md-none" href="/"><i class="fab fa-bitcoin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            

            <div class="block">
                <h3 class="block__title">Ваши ссылки</h3>
                <?php if(isset($data[0]) != "" ):?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Ссылка</th>
                                <th scope="col">Короткая ссылка</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            <?php echo $data;?>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        </table>
                    </div>
                <?php else:?>
                    <h3 class="text-center">Создайте свою первую ссылку</h3>
                <?php endif;?>
                
            </div><!-- /.block -->

            

        </div><!-- /.container -->
    </div><!-- /.platform__inner -->


    <!-- Footer -->
    <div class="platform__footer">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    &copy; Copyright 2021 omNom.link
                </div>
                <div class="col-6">
                    <div class="social  social--platform">
                        <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-slack"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-bitcoin"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-vk"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Logout modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="logout_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Выйти из учетной записи?</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <button class="btn  btn-block  btn-outline-dark" type="button" data-dismiss="modal">Нет</button>
                        </div>
                        <div class="col">
                            <button id='exit_btn' class="btn  btn-block  btn-outline-success" type="button" data-dismiss="modal">Да</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.platform -->



<!-- JS -->
<script src="/frontend/assets/js/main.min.js"></script>
<!-- AJAX -->
<script>
    $('#exit_btn').click(function (){
            /* LOGOFF */
            $.ajax({
                url: '/ajax/exit.php', 
                type: 'POST',
                cache: false,
                data: {},
                dataType: 'html',
                success: function(data){      
                    document.location.href = '/user/auth/';
                }
            });
        });
    </script>
</body>
</html>