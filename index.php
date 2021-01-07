<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="stylesheet" type="text/css" href="https://allfont.ru/allfont.css?fonts=arvo"/>
	<link rel="stylesheet" type="text/css" href="css/mainStyle.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/popup.css">
	<script type="text/javascript" src="../js/subMenu.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Главная | Музей п. Мариец</title>
</head>
<body>
<header>
		<nav>
			<a href="#box" onclick="openbox('box'); return false">
				<img src="img/menuIcon.svg" class="menuButton" id="menuButton">
			</a>

			<a href="index.php" class="linkToMainPage">
				<img src="img/logoMini.png" class="logoCenter" id="menuButton">
			</a>
		<img src="img/menuIcon.svg" class="menuButton2" id="menuIcon">
			<div class="addMaterial2">
				<button class="mainButton" style="cursor: default;">Добавить материал</button>
			</div>

			<ul class="menu" id="menu">
				<li><a href="index.php">главная</a></li>
				<li style="position: relative; cursor: pointer;"><a>список залов &#8595;</a>
					<ul class="subMenu">
						<li><a href="php/zal1.php">от николаевской хрустальной фабрики до стеклозавода мариец</a></li>
						<li><a href="#">версты победы</a></li>
						<li><a href="#">школа вчера и сегодня</a></li>
						<li><a href="#">церковь николая чудотворца</a></li>
					</ul>
				</li>
				<li><a href="php/about.php">о проекте</a></li>
			</ul>	

			<div class="addMaterial">
				<button class="mainButton">
					<a href="#popup">Добавить материал</a>
				</button>
			</div>
		</nav>
	</header>

	<div id="box" style="display: none;">
		<hr class="line">
			<ul class="menu" style="display: flex; flex-direction: column; align-items: center;">
				<li><a href="index.php">главная</a></li>
				<li style="position: relative; cursor: pointer;"><a>список залов &#8595;</a>
					<ul class="subMenu">
						<li><a href="php/zal1.php">от николаевской хрустальной фабрики до стеклозавода мариец</a></li>
						<li><a href="#">версты победы</a></li>
						<li><a href="#">школа вчера и сегодня</a></li>
						<li><a href="#">церковь николая чудотворца</a></li>
					</ul>
				</li>
				<li><a href="php/about.php">о проекте</a></li>
			</ul>	
	</div>

	<div class="popup" id="popup">
		<div class="popBody">
			<a class="popClose" href="#" style="text-decoration: none; cursor: pointer;">❌</a>
			<div class="popContent">
				<h2 class="popTitle">Добавить материал</h2>
				<form action="php/send.php" method="POST" enctype="multipart/form-data">
					<div class="formItem">
						<input placeholder="Имя" type="text" name="name" class="textInput" required/>
					</div>

					<div class="formItem">
						<input placeholder="Фамилия" type="text" name="surname"  class="textInput" required/>
					</div>

					<div class="formItem">
						<textarea placeholder="Здесь вы можете добавить текст" name="message" class="message"></textarea>
					</div>

					<div>
						<input class="" type="file" name="photo" multiple style="margin: 10px;"/>
					</div>

					<div class="total">
						<hr style="border: none; background-color: #333; height: 1px; width: 70%; margin: auto;">
						<p style="margin-bottom: 15px;">Указать ваше имя на сайте?</p>
						<div class="select">
							<span class="choose">
								<label>
									<input checked type="radio" name="showName" value="showMyName"/> да</span>
								</label>

							<span class="choose">
								<label>
									<input type="radio" name="showName" value="hideMyName"/> нет</span>
								</label>
						</div>
						<p style="margin-top: 15px;">
							<button class="sentForm" type="submit">Отправить</button>
						</p>
					</div>
				</form>
			</div>
		</div>
	</div>	

	<div class="topContainer">
		<img src="img/logo.png" class="logo">
	<div class="top">
		<p class="zagolovok">виртуальный музей поселка мариец</p>
		<p class="slogan">Гордимся мы историей своей,<br>А сохранить ее поможет наш музей</p>
	</div>
	</div>

	<div class="container">
	<div class="content">
	<p class="paragraph">На Земле много прекрасных мест, но дороже и ближе малая Родина. Поселок Мариец имеет богатую историю, и нам есть чем гордиться. Это стеклозавод, церковь, школа..., люди, которые работали на заводе, воевали, защищая нашу страну от врагов, все те, кто вносил достойный вклад в процветание своей малой Родины.</p>

	<img style="width: 7em; float: right; margin: 1%;" src="img/icon4.png">

	<p class="paragraph">О поселке, стеклозаводе, его основателях написано несколько книг. Был и музей об истории нашего поселка, который находился в здании местного Дома культуры. Но, к сожалению, в 201(?) году в результате пожара сгорел ДК, а вместе с ним и музей с  экспонатами.</p>

	<p class="paragraph">Создать новый музей, собрать коллекцию - дело непростое, но очень важное и нужное. Ведь музей является хранителем исторической памяти, в которой отражается жизнь людей, их дела и подвиги.</p>

	<p class="paragraph">Музей об истории поселка Мариец - виртуальный. Экспозиция имеет 4 раздела:<br>
		<span><a href="php/zal1.php" class="spisok">1. "От Николаевской хрустальной фабрики до стеклозавода Мариец"</a></span><br>
		<span><a href="#" class="spisok">2. "Версты Победы"</a></span><br>
		<span><a href="#" class="spisok">3. "Школа вчера и сегодня"</a></span><br>
		<span><a href="#" class="spisok">4. "Церковь Николая Чудотворца"</a></span><br>
	Данный музей доступен для широкого круга посетителей в удобное для них время.</p>

	<p class="paragraph">Выражаем благодарность всем тем, кто помог собрать экспонаты для виртуального музея, которые являются важным источником информации по истории родного края.</p>

	</div>
	</div>
</body>
</html>