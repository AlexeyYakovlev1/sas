<div class="students__filters hidden">
					<form class="students__filters-form">
						<label class="column">
							Год поступления
							<input
								class="checkbox__primary students__filters-checkbox"
								type="date"
								name="yearOfAdmission"
							/>
						</label>
						<label>
							Статус "Уволен"
							<input
								class="checkbox__primary students__filters-checkbox"
								type="checkbox"
								name="dismissed"
							/>
						</label>
						<label>
							Статус "Работает"
							<input
								class="checkbox__primary students__filters-checkbox"
								type="checkbox"
								name="working"
							/>
						</label>
						<label>
							Иностранец
							<input
								class="checkbox__primary students__filters-checkbox"
								type="checkbox"
								name="foreigner"
							/>
						</label>
						<label>
							Обучение на БАК (ВО)
							<input
								class="checkbox__primary students__filters-checkbox"
								type="checkbox"
								name="trainingBAK"
							/>
						</label>
						<label>
							Обучение на ВВО
							<input
								class="checkbox__primary students__filters-checkbox"
								type="checkbox"
								name="trainingVVO"
							/>
						</label>
						<label>
							Обучение на МАГ
							<input
								class="checkbox__primary students__filters-checkbox"
								type="checkbox"
								name="trainingMAG"
							/>
						</label>
						<label>
							Обучение на АСП
							<input
								class="checkbox__primary students__filters-checkbox"
								type="checkbox"
								name="trainingASP"
							/>
						</label>
						<label>
							Обучение на МВА
							<input
								class="checkbox__primary students__filters-checkbox"
								type="checkbox"
								name="trainingMBA"
							/>
						</label>
						<label class="column">
							Структурное подразделение
							<select
								class="checkbox__primary students__filters-checkbox"
								name="structuralDivision"
							>
								<option value="Подразделение 1">Подразделение 1</option>
								<option value="Подразделение 2">Подразделение 2</option>
								<option value="Подразделение 3">Подразделение 3</option>
								<option value="Подразделение 4">Подразделение 4</option>
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