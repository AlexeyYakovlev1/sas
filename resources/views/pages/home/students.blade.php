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
				<x-filter />
			</div>
		</div>
		<article class="students__content">
			<ul class="students__list">
				<?php
				$i = 0;
				foreach ($array as $item) {
					$i++;
					$id = $i - 1;
					$html = "<li data-id='$id'>";
					$html .= '<span>'.$i.'</span>';
					foreach ($item as $value) {
						$html .= "<span class='students__name'>".$value."</span>";
					}
					$html .= '</li>';
					echo $html;
				}
				?>
			</ul>
			<article class="modal hidden" id="student-modal">
				<div class="modal__content" id="student-modal-content">
					<div class="card">
						<section class="card__main card__section">
							<h2 class="card__section-title">Главная</h2>
							<div class="card__main-top">
								<img
									src="https://corp.synergy.ru/upload/main/600/ad_1662235951.jpg"
									alt="studentPhoto"
								/>
								<div class="card__main-info">
									<a
										class="card__main-info-name"
										href="https://corp.synergy.ru/company/personal/user/2830/"
									>
										Ковальчук Александр Сергеевич
									</a>
									<ul class="card__main-info-list">
										<li class="status-good">Работает</li>
										<li>Родился в 2004 году</li>
										<li>
											<a href="phone:89835306164">89835306164</a>
										</li>
										<li>
											<a href="mailto:AKovalchuk@synergy.ru">AKovalchuk@synergy.ru</a>
										</li>
										<li>
											Гражданин РФ
										</li>
										<li>
											Живет по адресу: <small>г Москва, Большой Коптевский проезд 7 строение 1</small>
										</li>
										<li>
											Год поступления: 2023
										</li>
									</ul>
								</div>
							</div>
							<div class="card__main-parents">
								<h4>Данные родителей</h4>
								<ul>
									<li>
										<p>Смирнов Виктор Александрович:</p>
										<a href="phone:89375582394">89375582394</a>
										<p>г. Киров</p>
									</li>
									<li>
										<p>Смирнова Вера Константиновна:</p>
										<a href="phone:89375582394">89375582394</a>
										<p>г. Москва</p>
									</li>
								</ul>
							</div>
						</section>
						<section class="card__employee card__section">
							<h2 class="card__section-title">Сотрудник</h2>
							<div class="card__section-content">
								<ul class="card__employee-job">
									<li>Группа верстки;</li>
									<li>Веб-разработчик;</li>
									<li>Площадка Сокол</li>
								</ul>
								<div class="card__employee-director">
									<h4>Прямой руководитель</h4>
									<ul>
										<li>
											<a href="https://corp.synergy.ru/company/personal/user/31491/">Аксянов Артем Петрович</a>
										</li>
										<li>
											<a href="phone:89736458372">89736458372</a> (7550)
										</li>
										<li>
											<a href="mailto:AAksianov@synergy.ru">AAksianov@synergy.ru</a>
										</li>
									</ul>
								</div>
								<div class="card__employee-description">
									<h4>Характеристика от руководителя</h4>
									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error officiis labore nisi, impedit facere repellendus repellat possimus ullam enim suscipit velit odit nostrum perspiciatis debitis iusto. Dicta neque aliquam sunt!</p>
								</div>
								<div class="card__feedback">
									<h4>Обратная связь</h4>
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
													<div class="card__feedback-check">
														<x-checkIcon />
													</div>
												</td>
												<td></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="card__checkbox">
									<h4>Чек бокс</h4>
									<p>Вообще хз что тут должно быть</p>
								</div>
								<div class="card__checkbox">
									<h4>Перспективы развития</h4>
									<table class='card__checkbox-sheet'>
										<thead>
											<tr>
												<td>Направление</td>
												<td>Подразделение</td>
												<td>Приоритет сохранения</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text" value='IT'></td>
												<td><input type="text" value='Web-разработка'></td>
												<td><input type="text" value="Наивысший"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</section>
						<section class="card__student card__section">
							<h2 class="card__section-title">Студент</h2>
							<div class="card__section-content">
								<div class="card__student-programs">
									<h4>Программы обучения</h4>
									<ul>
										<li>
											ВО
										</li>
										<li>
											ВВО
										</li>
										<li>
											МАГ
										</li>
										<li>
											АСП
										</li>
										<li>
											МВА
										</li>
									</ul>
								</div>
								<div class="card__student-groups">
									<h4>Группы обучения</h4>
									<ul>
										<li>
											Группа 1
										</li>
										<li>
											Группа 2
										</li>
										<li>
											Группа 3
										</li>
									</ul>
								</div>
								<div class="card__student-debts">
									<h4>Академические задолженности по каждой программе</h4>
									<ul>
										<li>
											Задолжность 1
										</li>
										<li>
											Задолжность 2
										</li>
									</ul>
								</div>
								<div class="card__student-diploma">
									<h4>Дипломная работа</h4>
									<a href="#">Ссылка на работу</a>
								</div>
								<div class="card__student-diploma">
									<h4>Аттестационный лист студента</h4>
									<p>Здесь должна быть таблица с введенными данными</p>
								</div>
							</div>
						</section>
						<section class="card__documents card__section">
							<h2 class="card__section-title">Документы</h2>
							<div class="card__section-content">
								<div class="card__section-content">
									<div class="card__documents-passport">
											<h4>Паспорт</h4>
											<p>Данные по паспорту</p>
										</div>
									</div>
									<div class="card__documents-passport">
											<h4>Договоры</h4>
											<p>трудовой, на оказание платных услуг, ученический, СЗ на скидку</p>
										</div>
									</div>
								</div>
						</section>
						<section class="card__mode card__section">
							<h2 class="card__section-title">Служба режима</h2>
							<div class="card__section-content">
								<div class="card__mode-description">
									<h4>Характеристика от службы режима</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates harum itaque asperiores voluptatibus laborum quis optio! Cum laboriosam delectus numquam rem quaerat similique sequi facilis dolor? Sunt expedita aliquid molestiae.</p>
								</div>
								<div class="card__mode-raports">
									<h4>Рапорта</h4>
									<ul>
										<li>Рапорт 1</li>
										<li>Рапорт 2</li>
									</ul>
								</div>
								<div class="card__mode-c3">
									<h4>C3</h4>
									<p>Что-то здесь должно быть</p>
								</div>
								<div class="card__mode-achivments">
									<h4>Спортивные достижения</h4>
									<table class='card__mode-achivments-sheet'>
										<thead>
											<tr>
												<td>Название мероприятия</td>
												<td>Результат</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text"></td>
												<td><textarea name="" id="" cols="30" rows="10"></textarea></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="card__mode-abilities">
									<h4>Творческие способности</h4>
									<table class='card__mode-abilities-sheet'>
										<thead>
											<tr>
												<td>Навыки на момент поступления</td>
												<td>Развитие на программе</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text"></td>
												<td><textarea name="" id="" cols="30" rows="10"></textarea></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</section>
						<section class="card__achivments card__section">
							<h2 class="card__section-title">Достижения</h2>
							<div class="card__section-content">
								<div class="card__achivments-company">
									<h4>В рамках корпорации</h4>
									<table class='card__achivments-company-sheet'>
										<thead>
											<tr>
												<td>Название</td>
												<td>Описание</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text"></td>
												<td><textarea name="" id="" cols="30" rows="10"></textarea></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</section>
						<section class="card__volunteering card__section">
							<h2 class="card__section-title">Волонтерство</h2>
							<div class="card__section-content">
								<div class="card__volunteering-company">
									<h4>Участие во внеучебной деятельности</h4>
									<table class='card__volunteering-company-sheet'>
										<thead>
											<tr>
												<td>Название</td>
												<td>Описание</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text"></td>
												<td><textarea name="" id="" cols="30" rows="10"></textarea></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</article>
</div>
@stop
@section("scripts")
	@vite([
		"resources/js/pages/students/filter.js",
		"resources/js/pages/students/modal.js",
		"resources/js/pages/students/search.js"
	])
@stop
