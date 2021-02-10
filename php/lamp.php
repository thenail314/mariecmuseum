<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
	<link href="https://allfont.ru/allfont.css?fonts=cyrillicold" rel="stylesheet" type="text/css" />
	<link href="https://allfont.ru/allfont.css?fonts=arvo" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../css/mainStyle.css">
	<link rel="stylesheet" type="text/css" href="../css/exponatPage.css">
	<link rel="stylesheet" type="text/css" href="../css/popup.css">
	<script type="text/javascript" src="../js/subMenu.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/slider.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Керосиновая лампа | Музей п. Мариец</title>
</head>
<body>
	<?php include 'header.php';?>
	<?php include 'addMaterial.php';?>

	<div class="top">
		<p class="zagolovok">Керосиновая лампа</p>
	</div>

	<div class="container">
		<div class="sliderBlock">
			<div class="main">
			<a class="prev" onclick="plusSlides(-1)">❮</a>
			<a class="next" onclick="plusSlides(1)">❯</a>
			<div class="points">
			    <span class="dot" onclick="currentSlide(1)"></span> 
			    <span class="dot" onclick="currentSlide(2)"></span> 
			    <span class="dot" onclick="currentSlide(3)"></span> 
			    <span class="dot" onclick="currentSlide(4)"></span> 
			</div>
			    <div class="slide">
			    <img src="../img/lamp.jpg">
			    </div>

			    <div class="slide">
			    <img src="../img/lamp2.jpg">
			    </div>

			    <div class="slide">
			    <img src="../img/lamp.jpg">
			    </div>

			    <div class="slide">
			    <img src="../img/lamp2.jpg">
			    </div>
			</div>	    
		</div>
		
		<div class="description">
			<p>Ламповое стекло произведено на Ульяновском стеклозаводе.</p>
			<br>
			<p>Описание не завершено.</p>

			<br>
			<a id="lookAt3D" href="###">3D просмотр (пока недоступно)</a>	
		</div>
	</div>
<script type="text/javascript" src="../js/slider.js"></script>
</body>
</html>
