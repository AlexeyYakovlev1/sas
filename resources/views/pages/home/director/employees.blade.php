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
			<li data-employee-id="1">Аксенова Варвара Вадимовна</li>
			<li data-employee-id="2">Алексеева Алиса Артёмовна</li>
			<li data-employee-id="3">Беликов Максим Степанович</li>
			<li data-employee-id="4">Березин Иван Александрович</li>
			<li data-employee-id="5">Бирюков Егор Александрович</li>
			<li data-employee-id="6">Волкова Полина Семёновна</li>
			<li data-employee-id="7">Греков Даниил Максимович</li>
			<li data-employee-id="8">Дегтярева Полина Максимовна</li>
			<li data-employee-id="9">Ермилова Милана Мироновна</li>
			<li data-employee-id="10">Жданова Ева Романовна</li>
			<li data-employee-id="11">Захаров Андрей Георгиевич</li>
			<li data-employee-id="12">Иванова Елизавета Руслановна</li>
			<li data-employee-id="13">Карпов Сергей Павлович</li>
			<li data-employee-id="14">Лебедев Егор Николаевич</li>
		</ul>
	</div>
</section>
@stop
@section("scripts")
	@vite(["resources/js/pages/home/director/cardEmployee.js"])
@stop