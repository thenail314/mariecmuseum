<div class="popup" id="popup">
	<div class="popBody">
		<a class="popClose" href="#" style="text-decoration: none; cursor: pointer;">❌</a>
		<div class="popContent">
			<h2 class="popTitle">Добавить материал</h2>
			<form action="send.php" method="POST" enctype="multipart/form-data">
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