<?php
$employees = [
	[
		"id" => "1",
		"name" => "Аксенова Варвара Вадимовна"
	],
	[
		"id" => "2",
		"name" => "Алексеева Алиса Артёмовна"
	],
	[
		"id" => "3",
		"name" => "Беликов Максим Степанович"
	],
	[
		"id" => "4",
		"name" => "Березин Иван Александрович"
	],
	[
		"id" => "5",
		"name" => "Бирюков Егор Александрович"
	],
	[
		"id" => "6",
		"name" => "Волкова Полина Семёновна"
	],
	[
		"id" => "7",
		"name" => "Греков Даниил Максимович"
	],
	[
		"id" => "8",
		"name" => "Дегтярева Полина Максимовна"
	],
	[
		"id" => "9",
		"name" => "Ермилова Милана Мироновна"
	],
	[
		"id" => "10",
		"name" => "Жданова Ева Романовна"
	],
	[
		"id" => "11",
		"name" => "Захаров Андрей Георгиевич"
	],
	[
		"id" => "12",
		"name" => "Иванова Елизавета Руслановна"
	],
	[
		"id" => "13",
		"name" => "Карпов Сергей Павлович"
	],
	[
		"id" => "14",
		"name" => "Лебедев Егор Николаевич"
	]
];
?>
@extends("layouts.main")
@section("title")
	Руководитель
@stop
@section("styles")
	@vite([
		"resources/sass/pages/home/employees.sass"
	])
@stop
@section("content")
<section class="employees" id="employees">
	<div class="container content">
		<h1 class="title__section">Сотрудники</h1>
		<div class="employees__header">
			<input
				type="text"
				class="input__primary"
				placeholder="Поиск сотрудника..."
			/>
			<button class="btn__primary red employees__search-btn">Поиск</button>
		</div>
		<ul class="employees__list">
			<?php
			foreach($employees as $employee)
			{
				$li = "<li data-employee-id=".$employee["id"].">";
				$li .= $employee["name"]."</li>";

				echo $li;
			}
			?>
		</ul>
	</div>
</section>
@stop
@section("scripts")
	@vite(["resources/js/pages/home/director/cardEmployee.js"])
@stop