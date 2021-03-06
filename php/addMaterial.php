<div class="popup" id="popup">
	<div class="popBody">
		<a class="popClose" href="#" style="text-decoration: none; cursor: pointer;">❌</a>
		<div class="popContent">
			<h2 class="popTitle">Добавить материал</h2>
			<form action="php/send.php" method="POST" enctype="multipart/form-data">
				<div class="formItem">
					<input placeholder="Имя" type="text" name="firstname" class="textInput" required/>
				</div>

				<div class="formItem">
					<input placeholder="Фамилия" type="text" name="surname"  class="textInput" required/>
				</div>

				<div class="formItem">
					<textarea placeholder="Здесь вы можете добавить текст" name="message" class="message"></textarea>
				</div>
				<div>
					<input type="file" name="photo" multiple style="margin: 9px;"/>
					<p style="font-size: 10px; text-align: center; margin-bottom: 2px;">Прикрепите .zip архив <br> c фото или прочим материалом</p>
				</div>
				<div class="total">
					<hr style="border: none; background-color: #333; height: 1px; width: 70%; margin: auto;">
					<p style="margin-bottom: 15px;">Указать ваше имя на сайте?</p>
					<div class="select">
						<span class="choose" style="margin-right: 5px;">
							<label>
								<input checked type="radio" name="showName" value="yes"/> да
							</label>
						</span>
						<span class="choose">
							<label>
								<input type="radio" name="showName" value="no"/> нет
							</label>
						</span>
					</div>
					<p style="margin-top: 15px;">
						<button class="sentForm" type="submit">Отправить</button>
					</p>
				</div>
			</form>
		</div>
	</div>
</div>
