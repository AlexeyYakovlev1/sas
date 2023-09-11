<?php
	$student_movement_id = '1H5qfLCQI1Lig2sQJjZQmA2s6i0BPudcHbkajIbtLI3w';
	$student_movement_gid = 0;
	$student_movement_csv = file_get_contents('https://docs.google.com/spreadsheets/d/'.$student_movement_id.'/export?format=csv&gid='.$student_movement_gid);
	$student_movement_csv = explode("\r\n", $student_movement_csv);
	$student_movement_array = array_map('str_getcsv', $student_movement_csv);

	$student_lose_id = '1lZgtLWE6OTSO6QyWUBYLw5wnQ1TR66XOJRyJZEQzeTs';
	$student_lose_gid = 0;
	$student_lose_csv = file_get_contents('https://docs.google.com/spreadsheets/d/'.$student_lose_id.'/export?format=csv&gid='.$student_lose_gid);
	$student_lose_csv = explode("\r\n", $student_lose_csv);
	$student_lose_array = array_map('str_getcsv', $student_lose_csv);
?>
@extends("layouts.main")
@section("title")
	Дирекция
@stop
@section("styles")
	@vite([
		"resources/sass/pages/home/generalInformation.sass",
		"resources/sass/pages/home/actionPlan.sass",
		"resources/sass/pages/home/movementsStudents.sass",
		"resources/sass/pages/home/students.sass",
		"resources/sass/components/list.sass"
	])
@stop
@section("content")
<article class="container content">
	<section class="info" id="generalInformation">
		<div class="info__header">
			<h2 class="title__section">Общая информация</h2>
			<button class="btn__primary">Смотреть все</button>
		</div>
		<ul class="info__list">
			<li>
				<span class="info__file">
					<img src="/images/file.svg" alt="файл">
				</span>
				<p>
					<a href="#">Таблица_1.docx</a>
				</p>
			</li>
			<li>
				<span class="info__file">
					<img src="/images/file.svg" alt="файл">
				</span>
				<p>
					<a href="#">Таблица_1.docx</a>
				</p>
			</li>
			<li>
				<span class="info__file">
					<img src="/images/file.svg" alt="файл">
				</span>
				<p>
					<a href="#">Таблица_1.docx</a>
				</p>
			</li>
			<li>
				<span class="info__file">
					<img src="/images/file.svg" alt="файл">
				</span>
				<p>
					<a href="#">Таблица_1.docx</a>
				</p>
			</li>
			<li>
				<span class="info__file">
					<img src="/images/file.svg" alt="файл">
				</span>
				<p>
					<a href="#">Таблица_1.docx</a>
				</p>
			</li>

			<li>
				<span class="info__file">
					<img src="/images/file.svg" alt="файл">
				</span>
				<p>
					<a href="#">Таблица_1.docx</a>
				</p>
			</li>
			<li>
				<span class="info__file">
					<img src="/images/file.svg" alt="файл">
				</span>
				<p>
					<a href="#">Таблица_1.docx</a>
				</p>
			</li>
			<li>
				<span class="info__file">
					<img src="/images/file.svg" alt="файл">
				</span>
				<p>
					<a href="#">Таблица_1.docx</a>
				</p>
			</li>
			<li>
				<span class="info__file">
					<img src="/images/file.svg" alt="файл">
				</span>
				<p>
					<a href="#">Таблица_1.docx</a>
				</p>
			</li>
			<li>
				<span class="info__file">
					<img src="/images/file.svg" alt="файл">
				</span>
				<p>
					<a href="#">Таблица_1.docx</a>
				</p>
			</li>
		</ul>
	</section>
	<section class="plan" id="actionPlan">
		<div class="plan__header">
			<h2 class="title__section">План мероприятий</h2>
			<p class="plan__header-down">
				<span class="plan__header-down-text">Цикл событий по развитию</span>
				<select name="loop">
					<option value="сентябрь 2021 - октябрь 2022">сентябрь 2021 - октябрь 2022</option>
					<option value="сентябрь 2021 - октябрь 2022">сентябрь 2021 - октябрь 2022</option>
					<option value="сентябрь 2021 - октябрь 2022">сентябрь 2021 - октябрь 2022</option>
				</select>
			</p>
		</div>
		<ul class="plan__list">
			<li>
				<div class="plan__item-header">
					<span class="plan__item-title">ГТО</span>
					<span class="plan__item-date">3 сентября 2022</span>
				</div>
				<div class="plan__item-body">
					<p class="plan__item-description">
						Обсуждение стратегии по развитию OS
						в России
					</p>
					<small class="plan__item-location">Москва, «Городские лаборатории» ВЭБ</small>
				</div>
			</li>
			<li>
				<div class="plan__item-header">
					<span class="plan__item-title">ГТО</span>
					<span class="plan__item-date">3 сентября 2022</span>
				</div>
				<div class="plan__item-body">
					<p class="plan__item-description">
						Обсуждение стратегии по развитию OS
						в России
					</p>
					<small class="plan__item-location">Москва, «Городские лаборатории» ВЭБ</small>
				</div>
			</li>
			<li>
				<div class="plan__item-header">
					<span class="plan__item-title">ГТО</span>
					<span class="plan__item-date">3 сентября 2022</span>
				</div>
				<div class="plan__item-body">
					<p class="plan__item-description">
						Обсуждение стратегии по развитию OS
						в России
					</p>
					<small class="plan__item-location">Москва, «Городские лаборатории» ВЭБ</small>
				</div>
			</li>
			<li>
				<div class="plan__item-header">
					<span class="plan__item-title">ГТО</span>
					<span class="plan__item-date">3 сентября 2022</span>
				</div>
				<div class="plan__item-body">
					<p class="plan__item-description">
						Обсуждение стратегии по развитию OS
						в России
					</p>
					<small class="plan__item-location">Москва, «Городские лаборатории» ВЭБ</small>
				</div>
			</li>
		</ul>
	</section>
	<section class="movements" id="studentMovements">
		<h2 class="title__section">Движение студентов</h2>
		<table>
			<tbody>
				<?php
				$i = 0;

				foreach ($student_movement_array as $item) {
					$i++;
					$html = '<tr>';
					
					foreach ($item as $value) {
						if($value>=0){
							$html .= '<td scope="row">'.$value.'</td>';
						} else {
							$html .= '<td scope="row" class="red">'.$value.'</td>';
						}
					}
						
					$html .= '</tr>';
					echo $html;
				}
				?>
			</tbody>
		</table>
		<table>
			<tbody>
				<?php
				$i = 0;

				foreach ($student_lose_array as $item) {
					$i++;
					$html = '<tr>';
					
					foreach ($item as $value) {
						if($value>=0){
							$html .= '<td scope="row">'.$value.'</td>';
						} else {
							$html .= '<td scope="row" class="red">'.$value.'</td>';
						}
					}
						
					$html .= '</tr>';
					echo $html;
				}
				?>
			</tbody>
		</table>
	</section>
	<section class="students" id="students">
		<div class="students__header">
			<div class="students__header-top">
				<h2 class="title__section">Студенты</h2>
				<button class="btn__primary hidden">Смотреть список</button>
			</div>
			<div class="students__header-down">
				<input
					id="students-search"
					type="text"
					class="input__primary"
					placeholder="Поиск студента..."
				/>
				<button class="btn__primary red students__find-btn">Поиск</button>
				<div class="students__header-filter">
					<button class="btn__primary btn__filter">
						Фильтровать
						<img class="btn__filter-arrow" src="/images/arrow.svg" alt="Стрелка">
					</button>
					<x-studentFilter />
				</div>
			</div>
		</div>
		<div id="student-information" class="hidden">
			<x-student />
		</div>
		<ul class="students__list">
			<li data-student-id="1">Аксенова Варвара Вадимовна</li>
			<li data-student-id="2">Алексеева Алиса Артёмовна</li>
			<li data-student-id="3">Беликов Максим Степанович</li>
			<li data-student-id="4">Березин Иван Александрович</li>
			<li data-student-id="5">Бирюков Егор Александрович</li>
			<li data-student-id="6">Волкова Полина Семёновна</li>
			<li data-student-id="7">Греков Даниил Максимович</li>
			<li data-student-id="8">Дегтярева Полина Максимовна</li>
			<li data-student-id="9">Ермилова Милана Мироновна</li>
			<li data-student-id="10">Жданова Ева Романовна</li>
			<li data-student-id="11">Захаров Андрей Георгиевич</li>
			<li data-student-id="12">Иванова Елизавета Руслановна</li>
			<li data-student-id="13">Карпов Сергей Павлович</li>
			<li data-student-id="14">Лебедев Егор Николаевич</li>
		</ul>
	</section>
</article>
@stop
@section("scripts")
@vite([
	"resources/js/pages/home/employee/filterStudents.js",
	"resources/js/pages/home/employee/searchStudents.js",
	"resources/js/pages/home/employee/cardStudents.js"
])
@stop