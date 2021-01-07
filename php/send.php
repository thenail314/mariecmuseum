<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$phone = $_POST['name'];}
if (isset($_POST['surname'])) {$name = $_POST['surname'];}
 
$myaddres  = "thenail314@yandex.ru"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$message = "Имя: $name\nФамилия: $surname\nУказать имя на сайте: $showName\n\nСообщение:\n$message";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Тема: новый материал для музея поселка Мариец'; //сабж
$email='admin.mariecmuseum'; // от кого
$send = mail ($myaddres,$sub,$message,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.php")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body style="background-color: #ddd; display: flex; align-items: center;">
<h1 style="color: #333; text-align: center;">Спасибо! Мы свяжемся с вами!</h1>
</body>
</html>