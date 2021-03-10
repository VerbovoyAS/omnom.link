<?php 
    // Отправка почты. Обратная связь на сайте.

    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $subject = trim(filter_var($_POST['subject'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $text = trim(filter_var($_POST['text'], FILTER_SANITIZE_STRING));



    if(strlen($username) <= 1)
        $error = 'Введите имя';
    else if(strlen($email) <= 3)
        $error = 'Введите email';
    else if(strlen($subject) <= 3)
        $error = 'Введите тему письма';
    else if(strlen($text) <= 20)
        $error = 'Введите сообщение, не менее 20 символов';
    
        
    if(isset($error) != '') {
        echo $error;
        exit();
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;



require_once "../vendor/autoload.php";

try {

$mail = new PHPMailer;
// Устанавливаем кодировку
$mail->CharSet = "utf-8";
// Загрузка языка
$mail->setLanguage('ru', 'language/');

// Адрес электронной почты который будет ОТПРАВЛЯТЬ почту
$mail->From = "feedback@omnom.link";
// Имя почтового ящика который будет отображаться у пользователя который получит письмо 
$mail->FromName = "omNom.link";

// Адрес электронной почты который будет ПРИНИМАТЬ почту
// Указывается адрес и имя кому
$mail->addAddress("verbovoyas@mail.ru", "Feedback omNom.link");
//$mail->addAddress("recepient1@example.com"); //Recipient name is optional

//Адрес, того кому нужно дать обратную связь, т.е. адрес человека который отправил письмо с формы
$mail->addReplyTo("$email", "$username");

//Копии, это адреса которые будут указаны кому отпраить копии письма
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Сообщение с сайта: $subject";
$mail->Body = "<p>$text</p>";
//$mail->AltBody = "This is the plain text version of the email content";

$mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
   
    //echo 'Готово';
    
?>