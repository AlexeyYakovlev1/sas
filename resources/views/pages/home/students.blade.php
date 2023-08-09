<?php
$id = '1eqb_1u7M78BJgtQSPjhy0SCiQhSW-K4joX0k0Mn3riw';
$gid = 0;
$csv = file_get_contents('https://docs.google.com/spreadsheets/d/'.$id.'/export?format=csv&gid='.$gid);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);
?>

@extends("layouts.home")
@section("title")
	Студенты
@stop
@section("styles")

@stop
@section("content")
	<div class="students">
		<div class="students__header">
			<input
				class="students__search input__primary"
				type="text"
				placeholder="Искать студента по ФИО..."
			/>
			<div class="students__header-right">
				<button
					class="students__btn-filter btn__primary"
				>
					Открыть фильтры
				</button>
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
			</div>
		</div>
		<article class="students__content">
			<ul class="students__list">
				<?php
				$i = 0;
				foreach ($array as $item) {
					$i++;
					$html = "<li>";
					$html .= '<span>'.$i.'</span>';
					foreach ($item as $value) {
						$html .= '<span>'.$value.'</span>';
					}
					$html .= '</li>';
					echo $html;
				}
				?>
			</ul>
			<div class="students__card">
				<ul class="card__list">
					<h3>Главная</h3>
					<ul class="card__item">
						<li>
							<div class="card__item_dot"></div>
							<span>Ковальчук Александр Сергеевич</span>
						</li>
						<li>
							<div class="card__item_dot"></div>
							<div class="card__item_photo">
								<img src="#" alt="studentPhoto">
							</div>
						</li>
						<li>
							<div class="card__item_dot"></div>
							<span>Работает</span>
						</li>
						<li>
							<div class="card__item_dot"></div>
							<span>Гражданин РФ</span><span></span>
						</li>
						<li>
							<div class="card__item_dot"></div>
							<span>Поступил в  2023 году</span>
						</li>
					</ul>
					<h3>Сотрудник</h3>
					<ul class="card__item">
						<li>
							<div class="card__item_dot"></div>
							<span>Структурное подразделение</span>
						</li>
						<li>
							<div class="card__item_dot"></div>
							<span>Встреча проведена</span>
						</li>
					</ul>
				</ul>
			</div>
		</article>
	</div>
@stop
@section("scripts")
	@vite(["resources/js/pages/students/filter.js"])
@stop
