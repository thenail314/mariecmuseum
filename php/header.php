<link href="https://allfont.ru/allfont.css?fonts=arvo" rel="stylesheet" type="text/css" />

<header>
		<nav>
			<a href="#box" onclick="openbox('box'); return false">
				<img src="../img/menuIcon.svg" class="menuButton" id="menuButton">
			</a>

			<a href="index.php" class="linkToMainPage">
				<img src="../img/logoMini.png" class="logoCenter" id="menuButton">
			</a>
		<img src="../img/menuIcon.svg" class="menuButton2" id="menuIcon">
			<div class="addMaterial2">
				<button class="mainButton" style="cursor: default;">Добавить материал</button>
			</div>

			<ul class="menu" id="menu">
				<li><a href="index.php">главная</a></li>
				<li style="position: relative; cursor: pointer;"><a>список залов &#8595;</a>
					<ul class="subMenu">
						<li><a href="zal1.php">от николаевской хрустальной фабрики до стеклозавода мариец</a></li>
						<li><a href="##">версты победы</a></li>
						<li><a href="#">школа вчера и сегодня</a></li>
						<li><a href="#">церковь николая чудотворца</a></li>
					</ul>
				</li>
				<li><a href="about.php">о проекте</a></li>
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
						<li><a href="zal1.php">от николаевской хрустальной фабрики до стеклозавода мариец</a></li>
						<li><a href="#">версты победы</a></li>
						<li><a href="#">школа вчера и сегодня</a></li>
						<li><a href="#">церковь николая чудотворца</a></li>
					</ul>
				</li>
				<li><a href="about.php">о проекте</a></li>
			</ul>	
	</div>
