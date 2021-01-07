<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$subname = $_POST['subname'];
$message = $_POST['message'];
$showName = $_POST['showName'];

$mail->isSMTP();
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Username = 'mariecmuseum@yandex.ru';
$mail->Password = 'P1ssw0rD';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

// От кого
$mail->setFrom('mariecmuseum@yandex.ru');		
// Кому
$mail->addAddress('thenail314@yandex.ru');

$mail->isHTML(true);

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' ' .$subname . ' оставил заявку, его телефон ' .$phone. '<br>Сообщение: ' .$message;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
}

?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="refresh" content="3; url=index.html">
	<title>Форма отправлена</title>
	<meta name="generator">
	<script type="text/javascript">
	setTimeout('location.replace("/index.php")', 3000);
	/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
	</script> 
	</head>
	<body>
	<h1>Спасибо за вклад в развитие музея!</h1>
	</body>
</html>