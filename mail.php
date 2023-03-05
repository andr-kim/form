<?php
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$text = $_POST['user_text'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);

$name = urlencode($name);
$email = urlencode($email);
$text = urlencode($text);

$name = trim($name);
$email = trim($email);
$text = trim($text);

if (mail("kimovskiy@gmail.com",
     "Pest Reject",
     "Имя: ".$name."\n".
     "Почта ".$email,
		 "Сообщение: ".$text,
     "From: script@gmail.com \r\n")
){
     header("Location: /ok.html");
}

else {
     echo ("Error");
}

?>
