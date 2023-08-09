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
				class="students__input input__primary"
				type="text"
				placeholder="Искать студента по ФИО..."
			/>
			<button
				class="students__btn-filter btn__primary"
			>
				Открыть фильтры
			</button>
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

@stop
