<?php


$name = $_POST['name'];
$surname = $_POST['surname'];
$message = $_POST['message'];
$showName = $_POST['showName'];
$photo = $_POST['showName'];

echo($name);
echo($surname);
echo($message);
echo($showName);
echo($showName);


?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="refresh" content="3; url=index.html">
	<title>Форма отправлена</title>
	<meta name="generator">
	<script type="text/javascript">
	setTimeout('location.replace("/index.php")', 5000);
	/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
	</script> 
	</head>
	<body>
	<p>Спасибо за вклад в развитие музея!</p>
	</body>
</html>