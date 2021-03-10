<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
    $web_title = 'О нас';
    require_once 'frontend/include/block/head.php'; 
    ?>
</head>
<body>
    <!--START HEADER -->
    <?php require_once 'frontend/include/block/header.php';?>
    <!-- END HEADER -->
    <!--START CONTENT -->
    <main class="container">
        <div class="jumbotron jumbotron-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <p class="h1 text-center">О нас</p>
                
            </div>
        </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <h4>Информация о нас</h4>
                
            </div>
        </div>
    </main>
    <!-- END CONTENT -->
    
    <!--START FOOTER -->
    <?php require_once 'frontend/include/block/footer.php'?>
    <!--END FOOTER -->
    <script>
        $('#errorBlock').hide();
    </script>
    
    
</body>
</html>