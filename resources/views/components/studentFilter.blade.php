<div class="filter hidden">
	<label class="filter__item">
		Год поступления
		<select name="yearOfAdmission">
			<option value="2023">2023</option>
			<option value="2022">2022</option>
			<option value="2021">2021</option>
			<option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
		</select>
	</label>
	<label class="filter__item">
		Иностранец
		<input type="checkbox" name="foreigner" />
	</label>
	<div class="filter__item" id="status">
		Статус:
		<span data-name="status" data-id="work">Работает</span>
		<span data-name="status" data-id="dismissed" class="active">Уволен</span>
	</div>
	<ul class="filter__item">
		<li data-name="training" data-id="BAK" class="active">Обучение на БАК (ВО)</li>
		<li data-name="training" data-id="ASP">Обучение на АСП</li>	
		<li data-name="training" data-id="VVO">Обучение на ВВО</li>
		<li data-name="training" data-id="MBA">Обучение на МВА</li>
		<li data-name="training" data-id="MAG">Обучение на МАГ</li>
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