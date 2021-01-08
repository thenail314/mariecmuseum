<?php

require_once '/PHPMailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$message = $_POST['message'];
$showName = $_POST['showName'];
// $photo = $_POST['photo'];

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
 
// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
 
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->Username = 'mariecmuseum@yandex.ru';
$mail->Password = 'P1ssw0rD';
 
// От кого
$mail->setFrom('mariecmuseum@yandex.ru', 'mariecmuseum');		
 
// Кому
$mail->addAddress('thenail314@yandex.ru', 'Наиль Набиев');
 
// Тема письма
$mail->Subject = 'test';
 
// Тело письма
$body = 'Hello, world!';
$mail->msgHTML($body);
 
// Приложение
// $mail->addAttachment(__DIR__ . '/image.jpg');
 
$mail->send();

echo($name);
echo "<br>";
echo($surname);
echo "<br>";
echo($message);
echo "<br>";
echo($showName);
// echo($photo);

// $name = $_POST['name'];
// $surname = $_POST['surname'];
// $message = $_POST['message'];
// $showName = $_POST['showName'];
// // $photo = $_POST['photo'];

// echo($name);
// echo "<br>";
// echo($surname);
// echo "<br>";
// echo($message);
// echo "<br>";
// echo($showName);
// // echo($photo);


?>

<!-- <!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="refresh" content="3; url=../index.php">
	<title>Форма отправлена</title>
	<meta name="generator">
	<script type="text/javascript">
	setTimeout('location.replace("../index.php")', 10000);
	/*Изменить текущий адрес страницы через 10 секунд*/
	</script> 
	</head>
	<body>
	<p>Спасибо за вклад в развитие музея!</p>
	</body>
</html> -->