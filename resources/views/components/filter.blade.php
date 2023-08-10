<div class="students__filters hidden">
					<form class="students__filters-form">
						<label class="column">
							Год поступления
							<input
								class="checkbox__primary students__filters-checkbox"
								type="number"
								name="yearOfAdmission"
							/>
						</label>
						<label class="column">
							Статус
							<select name="status">
								<option value="dismissed">Уволен</option>
								<option value="working">Работает</option>
							</select>
						</label>
						<label>
							Иностранец
							<input
								class="checkbox__primary students__filters-checkbox"
								type="checkbox"
								name="foreigner"
							/>
						</label>
						<label class="column">
							Обучение
							<select name="training">
								<option value="training_BAK">БАК (ВО)</option>
								<option value="training_VVO">ВВО</option>
								<option value="training_MAG">МАГ</option>
								<option value="training_ASP">АСП</option>
								<option value="training_MBA">МВА</option>
							</select>
						</label>
						<label class="column">
							Структурное подразделение
							<select
								class="checkbox__primary students__filters-checkbox"
								name="structuralDivision"
							>
								<option value="Подразделение 1">IT</option>
								<option value="Подразделение 2">Дизайн</option>
								<option value="Подразделение 3">Менеджмент</option>
							</select>
						</label>
						<label>
							Встреча проведена
							<input
								class="checkbox__primary students__filters-checkbox"
								type="checkbox"
								name="meetingWasHeld"
							/>
						</label>
						<button
							class="btn__primary students__filters-submit"
						>
							Применить
						</button>
					</form>
				</div>