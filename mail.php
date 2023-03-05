<?php
if(isset($_POST['submit'])){
    $to = "kimovskiy@gmail.com";
    $subject = "Новая заявка";
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $message = $_POST['user_text'];

    $headers = "From: " . $name . " <" . $email . ">\\r\\n";
    $headers .= "Reply-To: " . $email . "\\r\\n";

    $mail_body = "Имя: " . $name . "\\n";
    $mail_body .= "Email: " . $email . "\\n";
    $mail_body .= "Сообщение: " . $message . "\\n";

    if(mail($to, $subject, $mail_body, $headers)){
        echo "Ваше сообщение успешно отправлено.";
    } else {
        echo "Ошибка при отправке сообщения. Пожалуйста, попробуйте еще раз.";
    }
}
?>
