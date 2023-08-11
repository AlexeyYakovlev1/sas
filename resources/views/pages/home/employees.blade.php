<?php
$id = '1eqb_1u7M78BJgtQSPjhy0SCiQhSW-K4joX0k0Mn3riw';
$gid = 0;
$csv = file_get_contents('https://docs.google.com/spreadsheets/d/'.$id.'/export?format=csv&gid='.$gid);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);
?>
@extends("layouts.home")
@section("title")
	Список сотрудников
@stop
@section("styles")

@stop
@section("content")
	<article class="employees">
		<div class="employees__header">
			<input
			type="text"
			class="employees__search input__primary"
			placeholder="Введите ФИО сотрудника"
			/>
		</div>
		<div class="employees__main">
			<ul class="employees__list">
				<?php
				$i = 0;
				foreach ($array as $item) {
					$i++;
					$id = $i - 1;
					$html = "<li data-id='$id'>";
					$html .= '<span>'.$i.'</span>';
					foreach ($item as $value) {
						$html .= "<span class='empoyees__name'>".$value."</span>";
					}
					$html .= '</li>';
					echo $html;
				}
				?>
			</ul>
			<article class="modal hidden" id="employee-modal">
				<div class="modal__content" id="employee-modal-content">
					<div class="card">
						<div class="card__header">
							<button class="btn__primary card__header-btn active">
								Характеристика от руководителя
							</button>
							<button class="btn__primary card__header-btn">
								Итоги встречи
							</button>
							<button class="btn__primary card__header-btn">
								Итоги предыдущей встречи
							</button>
						</div>
						<ul class="card__content">
							<li class="card__content-item" id="descriptionFromDirector">
								<form class="card__content-item-form" id="directorForm">
									<label>
										Дата заполнения (чч.мм.гг.):
										<input class="input__primary" type="date" name="dateOfWrite" />
									</label>
									<label>
										ФИО студента:
										<input class="input__primary" type="text" name="fullNameStudent" value="Яковлев Алексей Николаевич" />
									</label>
									<label>
										Структурное подразделение (Департамент):
										<select name="departament">
											<option value="IT">IT</option>
											<option value="Design">Дизайн</option>
											<option value="Manager">Управление</option>
										</select>
									</label>
									<label>
										Занимаемая студентом должность:
										<input class="input__primary" type="text" name="post" />
									</label>
									<label>
										Период работы на данной позиции:
										<input class="input__primary" type="text" name="periodOfWork" />
									</label>
									<label>
										Основные достижения за время работы:
										<input class="input__primary" type="text" name="achivmentsForWork" />
									</label>
									<label>
										Сильные стороны и развитые компетенции:
										<input class="input__primary" type="text" name="strongSides" />
									</label>
									<label>
										Замечания и упущения в работе:
										<input class="input__primary" type="text" name="commentsOnWork" />
									</label>
									<label>
										Проявленные личные качества:
										<input class="input__primary" type="text" name="personalQualities" />
									</label>
									<label>
										Зоны ближайшего развития:
										<input class="input__primary" type="text" name="developmentSides" />
									</label>
									<label>
										Компетенции, которые необходимо развить в среднесрочной перспективе:
										<input class="input__primary" type="text" name="developCompetencies" />
									</label>
									<label>
										Карьерные и экспертные перспективы:
										<input class="input__primary" type="text" name="careerProspects" />
									</label>
									<button class="btn__primary">Прикрепить</button>
								</form>
							</li>
							<li class="card__content-item hidden" id="resultsOfMeeting">
								<ul class="card__content-meetingResult">
									<li>
										<label for="completed">Выполнено:</label>
										<input type="radio" name="completed">
									</li>
									<li>
										<label for="completed">В работе:</label>
										<input type="radio" name="completed">
									</li>
									<li>
										<label for="completed">Процесс реализации не запущен:</label>
										<input type="radio" name="completed">
									</li>
								</ul>
							</li>
							<li class="card__content-item hidden" id="resultsOfPrevMeeting">
								<p>Здесь должна быть таблица</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</article>
	</article>
@stop
@section("scripts")
	@vite([
		"resources/js/pages/employees/search.js",
		"resources/js/pages/employees/modal.js",
		"resources/js/pages/employees/tabs.js"
	])
@stop
