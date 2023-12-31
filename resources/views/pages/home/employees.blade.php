<?php
$id = '1eqb_1u7M78BJgtQSPjhy0SCiQhSW-K4joX0k0Mn3riw';
$gid = 0;
$csv = file_get_contents('https://docs.google.com/spreadsheets/d/'.$id.'/export?format=csv&gid='.$gid);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);
$employee_id = $employee["id"];
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
			<article
				class="modal
				<?php if (!isset($openModal) || !$openModal) echo "hidden" ?>"
				id="employee-modal"
			>
				<div
					class="modal__content"
					id="employee-modal-content"
					data-employee="<?php if (isset($openModal) && isset($employee)) echo "$employee_id" ?>"
				>
					<div class="card">
						<div class="employees__card-header card__header">
							<button
								class="employees__card-btn btn__primary card__header-btn active"
							>
								<a href="#description_from_director">
									Характеристика от руководителя
								</a>
							</button>
							<button
								class="employees__card-btn btn__primary card__header-btn"
							>
								<a href="#results_of_meeting">
									Итоги встречи
								</a>
							</button>
							<button
								class="employees__card-btn btn__primary card__header-btn"
							>
								<a href="#results_of_prev_meeting">
									Итоги предыдущей встречи
								</a>
							</button>
						</div>
						<div class="card__content">
							<section class="card__content-item" id="description_from_director">
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
									<button
										id="description-from-director-submit"
										class="btn__primary"
										disabled="true"
									>
										Прикрепить
									</button>
								</form>
							</section>
							<section class="card__content-item hidden" id="results_of_meeting">
								<div class='card__content-meetingResult-form'>
									<table class='card__content-meetingResult-sheet'>
										<thead>
											<tr>
												<td class="done">Выполнено:</td>
												<td class="in_work">В работе:</td>
												<td class="implementation_process_not_started">Процесс реализации не запущен:</td>
											</tr>
										</thead>
										<tbody>
											<tr class="new-row results-of-meeting">
												<td>
													<input
														class="card__content-meetingResult-input done"
														type="text"
														name="meetingResult"
													>
												</td>
												<td>
													<input
														class="card__content-meetingResult-input in_work"
														type="text"
														name="meetingResult"
													>
												</td>
												<td>
													<input
														class="card__content-meetingResult-input implementation_process_not_started"
														type="text"
														name="meetingResult"
													>
												</td>
											</tr>
										</tbody>
									</table>
									<div class="card__content-meetingResult-btns">
										<button
											id="meetingResult-saveBtn"
											class='card__content-meetingResult-btn btn__primary'
										>
											Готово
										</button>
										<div>
											<button
												type="button"
												id="meetingResult-addBtn"
												class='card__content-meetingResult-addBtn btn__primary'
											>
												Добавить строку
											</button>
											<button
												type="button"
												class="card__content-meetingResult-delBtn btn__primary red"
											>
												Удалить строку
											</button>
										</div>
									</div>
								</div>
							</section>
							<section class="card__content-item hidden" id="results_of_prev_meeting">
								<table class='card__feedback-sheet'>
									<thead>
										<tr>
											<td>Выполнено:</td>
											<td>В работе:</td>
											<td>Процесс реализации не запущен:</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<span>a</span>
											</td>
											<td>
												<span>a</span>
											</td>
											<td>
												<span>a</span>
											</td>
										</tr>
									</tbody>
								</table>
							</section>
						</div>
					</div>
				</div>
			</div>
		</article>
	</article>
@stop
@section("scripts")
	@vite([
		"resources/js/pages/employees/search.js",
		"resources/js/pages/employees/renderEmployees.js",
		"resources/js/pages/employees/tabs.js",
		"resources/js/pages/employees/descriptionFromDirector.js",
		"resources/js/pages/employees/tables.js"
	])
@stop
