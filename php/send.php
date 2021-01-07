<?php


$name = $_POST['name'];
$subname = $_POST['subname'];
$message = $_POST['message'];
$showName = $_POST['showName'];

echo($name);
echo($subname);


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