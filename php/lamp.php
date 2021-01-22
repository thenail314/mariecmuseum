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
	<title>Лампа без названия | Музей п. Мариец</title>
</head>
<body>
	<?php include 'header.php';?>
	<?php include 'addMaterial.php';?>

	<div class="top">
		<p class="zagolovok">лампа без названия</p>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat diam nibh, in venenatis nisi volutpat vitae. Curabitur lobortis pellentesque fringilla. Vestibulum dictum turpis ac nisi scelerisque, accumsan ornare ligula ultrices. Suspendisse sapien tortor, fermentum nec nulla sit amet, condimentum sodales ipsum. Pellentesque non velit arcu. In vestibulum suscipit lectus eget consequat. Pellentesque in sem elit. Cras non libero ut velit vulputate malesuada ac et augue. Suspendisse potenti. Etiam laoreet lacinia quam ac interdum. Integer nunc nibh, commodo id iaculis in, rutrum vulputate odio. Suspendisse potenti.</p>
			<br>
			<p>Sed cursus quam quis luctus venenatis. Nulla aliquet ligula lorem, ut dignissim augue dictum ut. Etiam viverra enim id risus pulvinar, vitae faucibus massa rhoncus. Nam metus neque, egestas vitae dignissim quis, aliquet et ipsum. Etiam tristique eget felis sit amet consequat. Vivamus eu arcu quam. In porta turpis velit, ut scelerisque magna sollicitudin et. Donec id varius lorem. Donec non lorem ipsum. Curabitur malesuada ligula eget libero rhoncus, in auctor tellus pharetra. Curabitur ex neque, pretium sit amet tellus a, malesuada euismod mi.</p>

			<br>
			<a id="lookAt3D" href="###">3D просмотр (пока недоступно)</a>	
		</div>
	</div>
<script type="text/javascript" src="../js/slider.js"></script>
</body>
</html>