<?php
$name = $_POST['user-name'];
$email = $_POST['user-email'];
$text = $_POST['user-text'];

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
     "Телефон ".$email,
		 "Сообщение: ".$text,
     "From: script@mail.ru \r\n")
){
     header("Location: /thank_you.html");
}

else {
     echo ("Error");
}

?>