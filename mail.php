<?php
if(isset($_POST['email'])) {

    $email_to = "kimovskiy@gmail.com";
    $email_subject = "Сообщение с контактной формы";

    function died($error) {
        echo "К сожалению, обнаружены ошибки в форме. ";
        echo "Эти ошибки перечислены ниже.<br /><br />";
        echo $error."<br /><br />";
        echo "Пожалуйста, исправьте ошибки и повторите отправку.<br /><br />";
        die();
    }

    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('К сожалению, обнаружены ошибки в форме.');
    }

    $name = $_POST['name'];
    $email_from = $_POST['email'];
    $message = $_POST['message'];

    $error_message = "";

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Детали сообщения:\\n\\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Имя: ".clean_string($name)."\\n";
    $email_message .= "Email: ".clean_string($email_from)."\\n";
    $email_message .= "Сообщение: ".clean_string($message)."\\n";


    $headers = 'From: '.$email_from."\\r\\n".
    'Reply-To: '.$email_from."\\r\\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

Спасибо за отправку сообщения! Мы свяжемся с вами в ближайшее время.

<?php
}
?>
