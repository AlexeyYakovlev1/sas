<div class="filter hidden">
	<label class="filter__item">
		Год поступления
		<select name="yearOfAdmission">
			<option value="2023">2023</option>
			<option value="2023">2022</option>
			<option value="2023">2021</option>
			<option value="2023">2020</option>
			<option value="2023">2019</option>
			<option value="2023">2018</option>
			<option value="2023">2017</option>
		</select>
	</label>
	<label class="filter__item">
		Иностранец
		<input type="checkbox" name="foreigner" />
	</label>
	<div class="filter__item" id="status">
		Статус:
		<span>Работает</span>
		<span class="active">Уволен</span>
	</div>
	<ul class="filter__item">
		<li data-name="training_BAK" class="active">Обучение на БАК (ВО)</li>
		<li data-name="training_ASP">Обучение на АСП</li>	
		<li data-name="training_VVO">Обучение на ВВО</li>
		<li data-name="training_MBA">Обучение на МВА</li>
		<li data-name="training_MAG">Обучение на МАГ</li>
	</ul>
	<label class="filter__item" id="departament">
		Структурное подразделение
		<select name="departament">
			<option value="IT">IT</option>
			<option value="Дизайн">Дизайн</option>
			<option value="Менеджмент">Менеджмент</option>
		</select>
	</label>
	<label class="filter__item">
		Встреча проведена
		<input type="checkbox" name="meetingIsDone" />
	</label>
</div>