<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
    $web_title = 'Контакты';
    require_once 'frontend/include/block/head.php'; 
    ?>
</head>
<body>
    <!-- START HEADER -->
    <?php require_once 'frontend/include/block/header.php';?>
    <!-- END HEADER -->
    <!-- START CONTENT -->
    <main class="container">
        <div class="jumbotron jumbotron-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <p class="h1 text-center">Контакты</p>
                
            </div>
        </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <h4>Напишите нам</h4>
                <form method="POST">
                    <input type="text" name="username" id="username" class="form-control mb-2" placeholder="Введите Ваше имя">

                    <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Введите Ваш E-mail">

                    <input type="text" name="subject" id="subject" class="form-control mb-2" placeholder="Напишите тему письма">

                    <textarea class="form-control" id="text" rows="3" placeholder="Напишите что-то хорошее"></textarea>

                    <div class="alert alert-danger mt-2" id="errorBlock" ></div>

                    <button type="button" id="send" class="btn btn-primary mt-3">Отправить</button>
                        
                </form>
            </div>
        </div>
    </main>
    <!-- END CONTENT -->
    
    <!-- START FOOTER -->
    <?php require_once 'frontend/include/block/footer.php'?>
    <!--END FOOTER -->
    
    <script> 
        $('#errorBlock').hide();
        $('#send').click(function (){
            
            var username = $('#username').val();
            var email = $('#email').val();
            var subject = $('#subject').val();
            var text = $('#text').val();

            $.ajax({
                url: 'ajax/mail.php', 
                type: 'POST',
                cache: false,
                data: {'username' : username, 'subject' :subject, 'email' : email, 'text' : text},
                dataType: 'html',
                success: function(data){        
                    if(data == 'Message has been sent') {
                        $('#send').text('Сообщение отправлено');
                        $('#errorBlock').hide();
                        $('#username').val("");
                        $('#email').val("");
                        $('#subject').val("");
                        $('#text').val("");
                        setTimeout(function () { $('#send').text('Отправить'); }, 5000);
                        
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