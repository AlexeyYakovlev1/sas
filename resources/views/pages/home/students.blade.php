<?php
$id_student_info = '1eqb_1u7M78BJgtQSPjhy0SCiQhSW-K4joX0k0Mn3riw';
$gid_student_info = 0;
$csv_student_info = file_get_contents('https://docs.google.com/spreadsheets/d/'.$id_student_info.'/export?format=csv&gid='.$gid_student_info);
$csv_student_info = explode("\r\n", $csv_student_info);
$array_student_info = array_map('str_getcsv', $csv_student_info);

$id_development_prospects = '1jt4gO_1dn_KgVppss7Y03PUPF0zTuBZmg2X1C67Y_HE';
$gid_development_prospects = 0;
$csv_development_prospects = file_get_contents('https://docs.google.com/spreadsheets/d/'.$id_development_prospects.'/export?format=csv&gid='.$gid_development_prospects);
$csv_development_prospects = explode("\r\n", $csv_development_prospects);
$array_development_prospects = array_map('str_getcsv', $csv_development_prospects);

$student_id = $student["id"];
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
				
				foreach ($array_student_info as $item) {
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
			<div
				class="modal
				<?php if (!isset($openModal) || !$openModal) echo "hidden" ?>"
				id="student-modal"
			>
				<div
					class="modal__content"
					id="student-modal-content"
					data-student="<?php if (isset($openModal) && isset($student)) echo "$student_id" ?>"
				>
					<div class="card">
						<div class="students__card-header card__header">
							<button class="students__card-btn btn__primary active">
								<a href="#main">Главная</a>
							</button>
							<button class="students__card-btn btn__primary">
								<a href="#employee">Сотрудник</a>
							</button>
							<button class="students__card-btn btn__primary">
								<a href="#student">Студент</a>
							</button>
							<button class="students__card-btn btn__primary">
								<a href="#docs">Документы</a>
							</button>
							<button class="students__card-btn btn__primary">
								<a href="#mode_service">Служба режима</a>
							</button>
							<button class="students__card-btn btn__primary">
								<a href="#achivments">Достижения</a>
							</button>
							<button class="students__card-btn btn__primary">
								<a href="#volunteering">Волонтерство</a>
							</button>
						</div>
						<div class="card__content">
							<section class="card__section" id="main">
								<div class="card__main-top">
									<img
										src="https://sun9-6.userapi.com/impg/PwurWN2LssvYpW8w-w8kHeqdoMZRvNOTQzoZpQ/4PBjFX2n_Zw.jpg?size=1080x941&quality=95&sign=ed742075906ed4077cdfc7f58a0935a8&c_uniq_tag=OcgD-wwJlj_WFHFO5gxYmIXpDZ6Dw-YBr1jhYHo8748&type=album"
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
							<section class="card__employee card__section hidden" id="employee">
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
										<table class="card__mode-employee-sheet">
											<tbody>
												<tr>
													<td>Дата заполнения</td>
													<td>28.08.2023</td>
												</tr>
												<tr>
													<td>ФИО студента</td>
													<td>Яковлев Алексей Николаевич</td>
												</tr>
												<tr>
													<td>Структурное подразделение (Департамент)</td>
													<td>IT</td>
												</tr>
												<tr>
													<td>Занимаемая студентом должность</td>
													<td>Веб-разработка</td>
												</tr>
												<tr>
													<td>Период работа по данной позиции</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Основные достижения за время работы</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Сильные стороны и развитые компетенции</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Замечания и упущения в работе</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Проявленные личные качества</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Зоны ближайшего развития</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Компетенции, которые необходимо развить в среднесрочной перспективе</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Карьерные и экспертные перспективы</td>
													<td>----</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="card__feedback">
										<h4>Обратная связь по встрече</h4>
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
										<p>--------</p>
									</div>
									<div class="card__checkbox">
										<h4>Перспективы развития</h4>
										<table class='card__checkbox-sheet'>
											<tbody>
												<?php
												$i = 0;
													
												foreach ($array_development_prospects as $item) {
													$i++;
													$html = "<tr>";

													foreach ($item as $value)
													{
														$html .= "<td cope='row'>$value</td>";
													}
													
													$html .= "</tr>";

													echo $html;
												}
												?>
											</tbody>
										</table>
										<button class="btn__primary" id="open-google-sheet">
											<a
												href="https://docs.google.com/spreadsheets/d/1jt4gO_1dn_KgVppss7Y03PUPF0zTuBZmg2X1C67Y_HE/edit#gid=0"
												target="_blank"
											>
												Перейти в GoogleSheet
											</a>
										</button>
									</div>
								</div>
							</section>
							<section class="card__student card__section hidden" id="student">
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
										<table class="card__mode-student-sheet">
											<tbody>
												<tr>
													<td>Дата заполнения</td>
													<td>28.08.2023</td>
												</tr>
												<tr>
													<td>ФИО</td>
													<td>Яковлев Алексей Николаевич</td>
												</tr>
												<tr>
													<td>Структурное подразделение (Департамент)</td>
													<td>IT</td>
												</tr>
												<tr>
													<td>Курс</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Измеримые достижения за отчетный период</td>
													<td>Написал сайт</td>
												</tr>
												<tr>
													<td>Какие планы не удалось осуществить и почему</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Какие компетенции, навыки и умения развивал за отчетный период</td>
													<td>Практика PHP, Javascript</td>
												</tr>
												<tr>
													<td>Какие компетенции, навыки и умения собирался развивать в будущем периоде</td>
													<td>Работа с Laravel, Vue</td>
												</tr>
												<tr>
													<td>Наставник</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Чему научился под руководством вашего наставника</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Кого из сокурсников считает лидером, которого можно ставить в пример и равняться на него</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Кто из сокурсников оказался «случайным попутчиком» для программы Кадровый резерв и Корпорации</td>
													<td>Многие</td>
												</tr>
												<tr>
													<td>Сотрудники Корпорации, от которых получает ценные знания и рекомендации</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Кого из сотрудников Корпорации считает Лидером, которого можно ставить в пример и равняться на него</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Какие карьерные перспективы перед собой видит</td>
													<td>Работа в LMS; Разработка как бэкенд, так и фронтенд (Laravel, Node.js, Vue)</td>
												</tr>
												<tr>
													<td>Какие улучшения необходимо сделать в отделе, департаменте и Корпорации в целом для повышения эффективности деятельности</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Какие новые продукты и услуги Клиентам предлагает создать в Корпорации</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Какие новые направления бизнеса предлагает открыть в Корпорации</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Какие улучшения в системе подготовки программы "Кадровый резерв" необходимо осуществить</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Какие направления набора абитуриентов на программу "Кадровый резерв" считает наиболее эффективными</td>
													<td>----</td>
												</tr>
												<tr>
													<td>Направления, в которых видит свое дальнейшее развитие в Корпорации</td>
													<td>IT (Фронтенд разработка в LMS на Vue)</td>
												</tr>
												<tr>
													<td>В каком департаменте сможет принести Корпорации ощутимую пользу и результат</td>
													<td>IT</td>
												</tr>
												<tr>
													<td>Предложения высшему руководству по обеспечению устойчивого развития корпорации</td>
													<td>----</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</section>
							<section class="card__documents card__section hidden" id="docs">
								<div class="card__section-content">
									<div class="card__section-content">
										<div class="card__documents-passport">
											<h4>Паспорт</h4>
											<table class="card__mode-documents-sheet">
												<tbody>
													<tr>
														<td>Серия</td>
														<td>2718</td>
													</tr>
													<tr>
														<td>Номер</td>
														<td>284712</td>
													</tr>
													<tr>
														<td>Кем выдан</td>
														<td>УМВД по городу Москва</td>
													</tr>
													<tr>
														<td>Дата выдачи</td>
														<td>28.08.2023</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="card__documents-passport">
											<h4>Договоры</h4>
											<table class="card__mode-documents-sheet">
												<tbody>
													<tr>
														<td>Трудовой</td>
														<td>
															<input type="file" hidden />
															<button class="btn__primary">Скачать</button>
														</td>
													</tr>
													<tr>
														<td>На окозание платных услуг</td>
														<td>
															<input type="file" hidden />
															<button class="btn__primary">Скачать</button>
														</td>
													</tr>
													<tr>
														<td>Ученический</td>
														<td>
															<input type="file" hidden />
															<button class="btn__primary">Скачать</button>
														</td>
													</tr>
													<tr>
														<td>СЗ на скидку</td>
														<td>
															<input type="file" hidden />
															<button class="btn__primary">Скачать</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</section>
							<section class="card__mode card__section hidden" id="mode_service">
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
										<div class="card__mode-achivments-header">
											<h4>Спортивные достижения</h4>
											<button class="card__mode-achivments-addBtn btn__primary">Добавить строку</button>
											<button class='card__mode-achivments-delBtn btn__primary red'>Удалить строку</button>
										</div>
										<table class='card__mode-achivments-sheet'>
											<thead>
												<tr>
													<td>Название мероприятия</td>
													<td>Результат</td>
												</tr>
											</thead>
											<tbody>
												<tr class="new-row sport-achivments">
													<td><input type="text"></td>
													<td><textarea name="" id="" cols="30" rows="10"></textarea></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="card__mode-abilities">
										<div class="card__mode-abilities-header">
											<h4>Творческие способности</h4>
											<button class='card__mode-abilities-addBtn btn__primary'>Добавить строку</button>
											<button class='card__mode-abilities-delBtn btn__primary red'>Удалить строку</button>
										</div>
										<table class='card__mode-abilities-sheet'>
											<thead>
												<tr>
													<td>Навыки на момент поступления</td>
													<td>Развитие на программе</td>
												</tr>
											</thead>
											<tbody>
												<tr class="new-row creative-skills">
													<td><input type="text"></td>
													<td><textarea name="" id="" cols="30" rows="10"></textarea></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</section>
							<section class="card__achivments card__section hidden" id="achivments">
								<div class="card__section-content">
									<div class="card__achivments-company">
										<div class="card__achivments-company-header">
											<h4>В рамках корпорации</h4>
											<button class='card__achivments-company-addBtn btn__primary'>Добавить строку</button>
											<button class='card__achivments-company-delBtn btn__primary red'>Удалить строку</button>
										</div>
										<table class='card__achivments-company-sheet'>
											<thead>
												<tr>
													<td>Название</td>
													<td>Описание</td>
												</tr>
											</thead>
											<tbody>
												<tr class="new-row achivments-company">
													<td><input type="text"></td>
													<td><textarea name="" id="" cols="30" rows="10"></textarea></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</section>
							<section class="card__volunteering card__section hidden" id="volunteering">
								<div class="card__section-content">
									<div class="card__volunteering-company">
										<div class="card__volunteering-company-header">
											<h4>Участие во внеучебной деятельности</h4>
											<button class='card__volunteering-company-addBtn btn__primary'>Добавить строку</button>
											<button class='card__volunteering-company-delBtn btn__primary red'>Удалить строку</button>
										</div>
										<table class='card__volunteering-company-sheet'>
											<thead>
												<tr>
													<td>Название</td>
													<td>Описание</td>
												</tr>
											</thead>
											<tbody>
												<tr class="new-row volunteering">
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
		</div>
	</article>
</div>
@stop
@section("scripts")
	@vite([
		"resources/js/pages/students/filter.js",
		"resources/js/pages/students/renderStudents.js",
		
		"resources/js/pages/students/search.js",
		"resources/js/pages/students/pointsForCard.js",
		"resources/js/pages/students/Line.js"
	])
@stop
