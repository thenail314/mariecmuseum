<?php


$name = $_POST['name'];
$surname = $_POST['surname'];
$message = $_POST['message'];
$showName = $_POST['showName'];
// $photo = $_POST['photo'];

echo($name);
echo "<br>";
echo($surname);
echo "<br>";
echo($message);
echo "<br>";
echo($showName);
// echo($photo);


?>

<!DOCTYPE HTML>
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
</html>