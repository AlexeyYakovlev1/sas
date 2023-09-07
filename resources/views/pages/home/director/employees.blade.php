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
			<li>
				<a href="#">Аксенова Варвара Вадимовна</a>
			</li>
			<li>
				<a href="#">Алексеева Алиса Артёмовна</a>
			</li>
			<li>
				<a href="#">Беликов Максим Степанович</a>
			</li>
			<li>
				<a href="#">Березин Иван Александрович</a>
			</li>
			<li>
				<a href="#">Бирюков Егор Александрович</a>
			</li>
			<li>
				<a href="#">Волкова Полина Семёновна</a>
			</li>
			<li>
				<a href="#">Греков Даниил Максимович</a>
			</li>
			<li>
				<a href="#">Дегтярева Полина Максимовна</a>
			</li>
			<li>
				<a href="#">Ермилова Милана Мироновна</a>
			</li>
			<li>
				<a href="#">Жданова Ева Романовна</a>
			</li>
			<li>
				<a href="#">Захаров Андрей Георгиевич</a>
			</li>
			<li>
				<a href="#">Иванова Елизавета Руслановна</a>
			</li>
			<li>
				<a href="#">Карпов Сергей Павлович</a>
			</li>
			<li>
				<a href="#">Лебедев Егор Николаевич</a>
			</li>
		</ul>
	</div>
</section>
@stop